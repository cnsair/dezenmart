<?php

namespace App\Livewire;

use App\Models\Feedback;
use App\Models\GuestMessage;
use Livewire\Component;
use Livewire\WithPagination;

class FeedbackTable extends Component
{
    use WithPagination;

    public $search = ''; // Live search term

    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when search changes
    }

    public function render()
    {
        // Fetch feedbacks based on search query
        $feedbacks = GuestMessage::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('phone', 'like', '%' . $this->search . '%')
            ->paginate(10); // Paginate results

        return view('livewire.feedback-table', [
            'feedbacks' => $feedbacks,
        ]);
    }
}
