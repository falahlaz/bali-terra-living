<?php

namespace App\Livewire\Forms\LandingPage\Content;

use App\Models\LandingPageContent;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateForm extends Form
{
    public LandingPageContent $contentPage;

    #[Validate(['required', 'string'])]
    public string $title = '';

    #[Validate(['required', 'string'])]
    public string $content = '';

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function store(): void
    {
        $this->contentPage->title = $this->title;
        $this->contentPage->content = $this->content;
        $this->contentPage->is_active = $this->is_active;
        $this->contentPage->save();
    }
}
