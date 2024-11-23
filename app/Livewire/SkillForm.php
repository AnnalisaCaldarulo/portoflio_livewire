<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\ElementList;

class SkillForm extends Component
{


    public $skill;
    public $editMode;

    public $name;
    public $subject;
    public $oldName;
    public $oldSubject;

    // appunto! Fare evento refresh di element list


    public function saveSkill()
    {

        if ($this->editMode) {
            $this->skill->update($this->validate([
                'name' => 'required',
                'subject' => 'required'
            ]));
        }else {
            Skill::create($this->validate([
                'name' => 'required',
                'subject' => 'required'
            ]));
        }
        session()->flash('success', 'success');
        $this->dispatch('refreshElement')->to(ElementList::class);
        $this->reset();
        session()->flash('success', 'Operazione conclusa con successo');
    }
    // public function getEvent($element)
    // {
    //    
    //     $this->name = $element['name'];
    //     $this->subject = $element['subject'];
    //     $this->editMode = true;
    // }

    #[On('goToForm')]
    public function mount($element = null)
    {
        // $this->skill = Skill::find($skill);
        if ($element) {
            $this->skill = Skill::find($element['id']);
            $this->editMode = true;
            $this->name = $this->skill->name;
            $this->oldName = $this->skill->name;
            $this->subject = $this->skill->subject;
            $this->oldSubject = $this->skill->subject;
        }
    }


    public function render()
    {
        return view('livewire.skill-form');
    }
}
