<?php

namespace App\Livewire\ControlPanel\LandingPage\Content;

use App\Livewire\Forms\LandingPage\Content\UpdateForm;
use App\Models\LandingPageContent;
use App\Models\LandingPageMenu;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Landing Page Menu Content - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::LandingPageContentMenu])]
class Detail extends Component
{
    public LandingPageMenu $menu;
    public LandingPageContent $content;
    public UpdateForm $form;
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.content.detail')
            ->with('page', Properties::LandingPageContentMenu)
            ->with('menu', $this->menu)
            ->with('content', $this->content);
    }

    public function mount(): void
    {
        $this->form->contentPage = $this->content;
        $this->form->title = $this->content->title;
        $this->form->content = $this->content->content;
        $this->form->is_active = $this->content->is_active;
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        return redirect()->route('cp.landing-pages.menu.detail', [$this->menu->id]);
    }
}
