<?php

namespace App\Livewire\Forms\LandingPage\Section;

use App\Models\PageSection;
use Livewire\Form;

class UpdateForm extends Form
{
    public ?string $page_name;

    public ?string $section_key;

    public ?string $section_name;

    public ?int $display_order;

    public ?bool $is_active = false;

    private PageSection $section;

    public function rules(): array
    {
        return [
            'page_name' => 'required|string',
            'section_key' => 'required|string|unique:page_sections,section_key,'.$this->section->id,
            'section_name' => 'required|string',
            'display_order' => 'required|integer',
            'is_active' => 'bool',
        ];
    }

    public function setForm(PageSection $section): void
    {
        $this->page_name = $section->page_name;
        $this->section_key = $section->section_key;
        $this->section_name = $section->section_name;
        $this->display_order = $section->display_order;
        $this->is_active = $section->is_active;
    }

    public function store(PageSection $section): void
    {
        $this->section = $section;
        $section->update($this->validate());
    }
}
