<?php

namespace App\Livewire\ControlPanel\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard - Control Panel')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.control-panel.dashboard.index');
    }
}
