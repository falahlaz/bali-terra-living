<?php

namespace App\Livewire\ControlPanel\Dashboard;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard - Control Panel')]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view('livewire.control-panel.dashboard.index');
    }
}
