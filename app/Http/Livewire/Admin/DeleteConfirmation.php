<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;

class DeleteConfirmation extends Component
{
    public $model;
    public $sku;

    protected function getListeners()
    {
        return ['delete:' . $this->sku => 'delete'];
    }

    public function delete($msg)
    {
        $this->model->delete();
        return redirect()->route('admin.pages.index')->with('status', $msg);
    }

    public function render()
    {
        return view('livewire.admin.delete-confirmation');
    }
}
