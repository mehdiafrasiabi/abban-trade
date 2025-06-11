<?php

namespace App\Livewire\Admin\Ticket;

use App\Models\Department;
use App\Models\Ticket;
use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination,SEOTools;
    public $search = '';
    public $status = '';
    public $priority = '';
    public $department = '';
    public $assigned = '';
    public $perPage = 10;
    public $activeTab = 'all';

    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('لیست تیکت و پشتیبانی');
    }
    public function updating($field)
    {
        if (in_array($field, ['search', 'priority', 'department', 'assigned', 'activeTab'])) {
            $this->resetPage();
        }
    }
    public function render()
    {
        $ticketsQuery = Ticket::query()
            ->with(['user', 'department', 'assignedTo'])
            ->when($this->search, fn($q) => $q->where('title', 'like', "%{$this->search}%"))
            ->when($this->priority, fn($q) => $q->where('priority', $this->priority))
            ->when($this->department, fn($q) => $q->where('department_id', $this->department))
            ->when($this->assigned, fn($q) => $q->where('assigned_to', $this->assigned))
            ->when($this->activeTab !== 'all', function ($query) {
                $query->where('status', $this->activeTab);
            });

        $tickets = $ticketsQuery
            ->orderBy('updated_at', 'desc')
            ->paginate($this->perPage);

        // آمار کلی
        $totalTickets = Ticket::count();
        $waitingTickets = Ticket::where('status', 'waiting')->count();
        $closedTickets = Ticket::where('status', 'closed')->count();
        $answeredTickets = Ticket::where('status', 'answered')->count();

        return view('livewire.admin.ticket.index', [
            'tickets' => $tickets,
            'departments' => Department::all(),
            'admins' => User::where('is_admin', true)->get(),
            'totalTickets' => $totalTickets,
            'waitingTickets' => $waitingTickets,
            'closedTickets' => $closedTickets,
            'answeredTickets' => $answeredTickets,
        ])->layout('layouts.admin.app');
    }

}
