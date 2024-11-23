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
        } {
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
    #[On('goToForm')]
    public function getEvent($element)
    {
        $this->skill = Skill::find($element['id']);
        $this->name = $element['name'];
        $this->subject = $element['subject'];
        $this->editMode = true;
    }

    // public function mount($skill = null)
    // {

    //     // $this->skill = Skill::find($skill);

    //     if ($skill) {
    //         $this->editMode = true;
    //         $this->skill = $skill;
    //         $this->name = $skill->name;
    //         $this->oldName = $skill->name;
    //         $this->subject = $skill->subject;
    //         $this->oldSubject = $skill->subject;
    //     }
    // }


    public function render()
    {
        return view('livewire.skill-form');
    }
}
