<?php

namespace App\Livewire\ControlPanel\Auth;

use App\Livewire\Forms\Auth\SignInForm;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.guest')]
#[Title('Sign In - Control Panel')]
class SignIn extends Component
{
    public SignInForm $form;

    public function signIn(): void
    {
        $this->form->submit();
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.auth.sign-in');
    }
}
