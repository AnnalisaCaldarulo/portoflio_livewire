<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;
use App\Models\Experience;
use Livewire\Attributes\On;
use App\Livewire\ElementList;
use App\Models\Certification;
use Livewire\Attributes\Validate;

class SkillForm extends Component
{
    public $editMode;
    public $model = 'experience';
    public $item;

    public $skill;
    #[Validate('required|min:2')]
    public $name;
    #[Validate('required|min:2')]
    public $subject;

    public $experience;
    #[Validate('required|min:2')]
    public $job;
    #[Validate('required|min:2|date|before_or_equal:finish')]
    public $start;
    #[Validate('nullable|date|after_or_equal:start')]
    public $finish;
    #[Validate('required|boolean')]
    public $is_current = false;


    public $certification;
    #[Validate('required')]
    public $certificationName;
    #[Validate('nullable|url')]
    public $link;

    public function saveItem()
    {
        if ($this->editMode) {
            $this->item->update($this->validateData());
        } else {
            $this->validate();
            if ($this->model === 'skill') {
                Skill::create([
                    'name' => $this->name,
                    'subject' => $this->subject
                ]);
            } elseif ($this->model === 'experience') {
                Experience::create([
                    'job' => $this->job,
                    'start' => $this->start,
                    'finish' => $this->finish,
                    'is_current' => $this->is_current
                ]);
            } elseif ($this->model === 'certification') {
                Certification::create([
                    'name' => $this->certificationName,
                    'link' => $this->link
                ]);
            }
        }

        session()->flash('success', 'Operazione conclusa con successo');
        $this->dispatch('refreshElement')->to(ElementList::class);
        $this->reset();
    }

    protected function validateData()
    {
        return $this->validate();
    }

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
            } elseif ($object[1] == 'experience') {
                $this->item = Experience::findOrFail($object[0]['id']);
                $this->job = $this->item->job;
                $this->start = $this->item->start;
                $this->finish = $this->item->finish;
                $this->is_current = $this->item->is_current;
            } elseif ($object[1] == 'certification') {
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
