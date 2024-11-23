<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;
use App\Models\Experience;
use Livewire\Attributes\On;
use App\Livewire\ElementList;
use App\Models\Certification;

class SkillForm extends Component
{
    public $editMode;
    public $model = 'skill';
    public $item;

    public $skill;
    public $name;
    public $subject;
    
    public $experience;
    public $job;
    public $start;
    public $finish;
    public $is_current;


    public $certification;
    public $certificationName;
    public $link;

    public function saveSkill()
    {

        if ($this->editMode) {
            $this->skill->update($this->validate([
                'name' => 'required',
                'subject' => 'required'
            ]));
        } else {
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
    //     $this->name = $element[0]['name'];
    //     $this->subject = $element[0]['subject'];
    //     $this->editMode = true;
    // }

    #[On('goToForm')]
    public function mount($object = null)
    {
        if ($object) {
            $this->editMode = true;
            $this->model = $object[1];                 
            if ($object[1] == 'skill') {
                $this->item = Skill::findOrFail($object[0]['id']);
                $this->name = $this->item->name;
                $this->subject = $this->item->subject;
            }elseif($object[1] == 'experience'){
                $this->item = Experience::findOrFail($object[0]['id']);
                $this->job = $this->item->job;
                $this->start = $this->item->start;
                $this->finish = $this->item->finish;
                $this->is_current = $this->item->is_current;
            }elseif($object[1] == 'certification'){
                $this->item = Certification::findOrFail($object[0]['id']);
                $this->certificationName = $this->item->name;
                $this->link = $this->item->link;
            }
        }
    }


    public function render()
    {
        return view('livewire.skill-form');
    }
}
