<?php

namespace App\Livewire\ControlPanel\Contacts;

use App\Models\ContactSubmission;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail User Contact - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::UserContactPage])]
class Detail extends Component
{
    public ContactSubmission $contact;
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $this->contact->load('admin');
        return view('livewire.control-panel.contacts.detail')
            ->with('page', Properties::UserContactPage)
            ->with('contact', $this->contact);
    }
}
