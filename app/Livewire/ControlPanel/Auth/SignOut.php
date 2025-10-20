<?php

namespace App\Livewire\ControlPanel\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SignOut extends Component
{
    public function signOut(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        Auth::logout();

        return redirect()->route('cp.sign-in');
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.auth.sign-out');
    }
}
