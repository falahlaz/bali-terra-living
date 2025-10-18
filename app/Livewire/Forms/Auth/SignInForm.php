<?php

namespace App\Livewire\Forms\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SignInForm extends Form
{
    #[Validate(['required', 'email'])]
    public string $email = '';

    #[Validate(['required'])]
    public string $password = '';

    #[Validate(['boolean'])]
    public bool $remember = false;

    public function submit(): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    {
        $this->validate();
        if (Auth::attempt($this->only('email', 'password'), $this->remember)) {
            return redirect()->route('cp.dashboard.index');
        }

        $this->reset();
        throw ValidationException::withMessages([
            'form.email' => 'These credentials do not match our records.',
        ]);
    }
}
