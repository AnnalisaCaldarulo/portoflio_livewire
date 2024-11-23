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
    public $model = 'experience';
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

    // public function saveItem()
    // {

    //     if ($this->editMode) {
    //         $this->skill->update($this->validate([
    //             'name' => 'required',
    //             'subject' => 'required'
    //         ]));
    //     } else {
    //         if ($this->model == 'skill') {
    //             Skill::create($this->validate([
    //                 'name' => 'required',
    //                 'subject' => 'required'
    //             ]));
    //         } elseif ($this->model == 'experience') {
    //             $experience = Experience::create([
    //                 'job' => $this->job,
    //                 'start' => $this->start,
    //                 'finish' => $this->finish,
    //                 'is_current' => $this->is_current
    //             ]);
    //         } elseif ($this->model == 'certification') {
    //             $certification = Certification::create([
    //                 'name' => $this->certificationName,
    //                 'link' => $this->link
    //             ]);
    //         }else{
    //             return redirect()->back()->with('success', 'Riprova più tard');
    //         }
    //     }
    //     session()->flash('success', 'success');
    //     $this->dispatch('refreshElement')->to(ElementList::class);
    //     $this->reset();
    //     session()->flash('success', 'Operazione conclusa con successo');
    // }

    public function saveItem()
    {
        if ($this->editMode) {
            $this->item->update($this->validateData());
        } else {
            $modelClass = 'App\\Models\\' . ucfirst($this->model);
            $data = $this->validateData();
            if (array_key_exists('certificationName', $data)) {
                $data['name'] = $data['certificationName'];
            }
            $modelClass::create($data);
        }

        session()->flash('success', 'Operazione conclusa con successo');
        $this->dispatch('refreshElement')->to(ElementList::class);
        $this->reset();
    }

    protected function validateData()
    {
        if ($this->model === 'skill') {
            return $this->validate([
                'name' => 'required',
                'subject' => 'required'
            ]);
        } elseif ($this->model === 'experience') {
            return $this->validate([
                'job' => 'required',
                'start' => 'required',
                'finish' => 'required',
                'is_current' => 'boolean'
            ]);
        } elseif ($this->model === 'certification') {
            return $this->validate([
                'certificationName' => 'required',
                'link' => 'required|url'
            ]);
        }
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
