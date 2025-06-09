<?php

namespace App\Livewire\Client\Profile\Ticket;

use App\Models\Ticket;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination,SEOTools;

    public string $search = '';

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('تیکت ها');
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $tickets = Ticket::with('department')
            ->where('user_id', auth()->id())
            ->where(function ($q) {
                $q->where('title', 'like', "%{$this->search}%")
                    ->orWhere('status', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate(10);

        return view('livewire.client.profile.ticket.index',
        ['tickets' => $tickets]
        )->layout('layouts.client.profile');
    }
}
