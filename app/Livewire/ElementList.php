<?php

namespace App\Livewire;

use App\Models\Certification;
use App\Models\Experience;
use App\Models\Skill;
use Livewire\Component;

class ElementList extends Component
{
    public $element;
    public $elementList;
    public $cols;
    public function mount()
    {
        $this->element = 'skill';
        $this->elementList = Skill::orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        if ($this->element == 'skill') {
            $this->elementList = Skill::orderBy('created_at', 'desc')->get();
            $skill = new Skill;
            $this->cols = $skill->getFillable();
        } elseif ($this->element == 'experience') {
            $this->elementList = Experience::orderBy('created_at', 'desc')->get();
            $experience = new Experience;
            $this->cols = $experience->getFillable();
        } elseif ($this->element == 'certification') {
            $this->elementList = Certification::orderBy('created_at', 'desc')->get();
            $certification = new Certification;
            $this->cols = $certification->getFillable();
        }
        return view('livewire.element-list');
    }
}
