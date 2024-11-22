<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\LivewireFilepond\WithFilePond;

class CreateProjectForm extends Component
{
    use WithFilePond;
    public $img;
    public function render()
    {
        return view('livewire.create-project-form');
    }
}
