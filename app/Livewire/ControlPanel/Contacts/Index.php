<?php

namespace App\Livewire\ControlPanel\Contacts;

use App\Models\ContactSubmission;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('User Contacts - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::UserContactPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $contacts = ContactSubmission::with('admin')
            ->select([
                'id',
                'full_name',
                'phone_number',
                'interested_in',
                'status',
                'processed_at',
                'processed_by',
                'created_at',
            ])
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('livewire.control-panel.contacts.index')
            ->with('page', Properties::UserContactPage)
            ->with('contacts', $contacts);
    }
}
