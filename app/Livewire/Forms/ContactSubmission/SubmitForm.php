<?php

namespace App\Livewire\Forms\ContactSubmission;

use App\ContactStatus;
use App\Models\ContactSubmission;
use Livewire\Form;

class SubmitForm extends Form
{
    public ?string $full_name;

    public ?string $email;

    public ?string $phone_number;

    public ?string $interested_in;

    public ?string $message;

    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'phone_number' => ['required', 'string', 'min:10'],
            'interested_in' => ['required', 'string'],
            'message' => ['required', 'string'],
        ];
    }

    public function store(): void
    {
        $validated = $this->validate();
        $validated['ip_address'] = request()->ip();
        $validated['user_agent'] = request()->userAgent();
        $validated['status'] = ContactStatus::New;

        ContactSubmission::create($validated);
    }
}
