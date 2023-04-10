<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ToggleButton extends Component
{
    public $model;
    public $isActive;

    public function mount()
    {
        $this->isActive = $this->model->active;
    }

    public function updatedIsActive($value)
    {
        $this->model->active = $value;
        $this->model->save();
    }

    public function render()
    {
        return view('livewire.admin.toggle-button');
    }
}
