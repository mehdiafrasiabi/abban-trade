<?php

namespace App\Livewire\Client\Profile\Ticket;

use App\Models\Department;
use App\Models\Ticket;
use App\Models\TicketMessage;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads,SEOTools;

    public $title = '';
    public $department_id;
    public $priority = 'medium';
    public $message = '';
    public $attachment;

    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('  تیکت جدید');
    }
    public function submit()
    {
        $this->validate([
            'title' => 'required|string|min:3|max:255',
            'department_id' => 'required|exists:departments,id',
            'priority' => 'required|in:low,medium,high',
            'message' => 'required|string|min:5',
            'attachment' => 'nullable|file|max:51200|mimes:jpg,jpeg,png,gif,webp,mp4,mov,avi,mkv,webm',
        ], [
            '*.required' => 'فیلد ضروری است',
            '*.string' => 'فرمت نوشتاری شما اشتباه است ',
            '*.max' => 'حداکثر حجم فایل ۵۰ مگابایت است',
            '*.min' => 'حداقل نوشتن : 4 کاراکتر',
            '*.mimes' => 'فقط فرمت‌های عکس مجاز است',
        ]);

        $fileName = null;
        if ($this->attachment) {
            $fileName = Str::random(40) . '.' . $this->attachment->getClientOriginalExtension();
            $this->attachment->storeAs("ticket/" . auth()->id() . "/file", $fileName, 'public');
        }

        $ticket = Ticket::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'department_id' => $this->department_id,
            'priority' => $this->priority,
            'status' => 'waiting',
        ]);

        $ticket->messages()->create([
            'user_id' => auth()->id(),
            'message' => $this->message,
            'attachment' => $fileName,
        ]);

        return redirect()->route('client.profile.ticket.show', $ticket->id);
    }

    public function render()
    {
        return view('livewire.client.profile.ticket.create', [
            'departments' => Department::all(),
        ])->layout('layouts.client.profile');
    }
}
