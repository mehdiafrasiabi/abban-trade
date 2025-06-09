<?php

namespace App\Livewire\Admin\Ticket;

use App\Models\Ticket;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithFileUploads;

    public Ticket $ticket;
    public $message = '';
    public $attachment;

    public function mount(Ticket $ticket)
    {
        $this->ticket = $ticket->load(['messages.user', 'user', 'department']);
    }
    public function submit()
    {
        $validator = Validator::make([
            'message' => $this->message,
            'attachment' => $this->attachment,
        ], [
            'message' => 'required|string|min:3',
            'attachment' => 'nullable|file|max:51200|mimes:jpg,jpeg,png,webp,gif,mp4,mov,avi,mkv,webm',
        ])->validate();

        $fileName = null;
        if ($this->attachment) {
            $fileName = Str::random(40) . '.' . $this->attachment->getClientOriginalExtension();
            $this->attachment->storeAs("ticket/{$this->ticket->user_id}/file", $fileName, 'public');
        }
        $this->ticket->messages()->create([
            'user_id' => auth()->id(), // ادمین
            'message' => $this->message,
            'attachment' => $fileName,
        ]);

        $this->ticket->update([
            'status' => 'answered',
        ]);

        $this->reset(['message', 'attachment']);
        $this->dispatch('success', 'پاسخ با موفقیت ارسال شد.');
    }

    public function closeTicket()
    {
        $this->ticket->update([
            'status' => 'closed',
        ]);
        $this->dispatch('success', 'تیکت بسته شد.');
    }

    public function render()
    {
        return view('livewire.admin.ticket.show')->layout('layouts.admin.app');
    }
}
