<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;
use App\Models\Experience;
use App\Livewire\SkillForm;
use App\Models\Certification;

class ElementList extends Component
{
    public $element;
    public $elementList;
    public $cols;

    public function goToForm($element){
        $this->dispatch('goToForm', $element)->to(SkillForm::class);
    }

    public function mount()
    {
        $this->element = 'skill'; 
        $this->updateElementList();
    }

    public function updateElementList() {
        switch ($this->element) {
            case 'skill':
                $this->elementList = Skill::orderBy('created_at', 'desc')->get();
                $this->cols = (new Skill)->getFillable();
                break;
            case 'experience':
                $this->elementList = Experience::orderBy('created_at', 'desc')->get();
                $this->cols = (new Experience)->getFillable();
                break;
            case 'certification':
                $this->elementList = Certification::orderBy('created_at', 'desc')->get();
                $this->cols = (new Certification)->getFillable();
                break;
        }
    }


    public function render()
    {
        $this->updateElementList();
        return view('livewire.element-list');
    }
}
