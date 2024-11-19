<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class QualificationSection extends Component
{
    public $list;
    public $skillTab = true;
    public $experienceTab = false;
    public $certificationTab = false;

    public function openList($tab)
    {
        if ($tab == 'skillTab') {
            $this->list = [
                'PHP, Laravel, Livewire',
                'HTML, CSS',
                'JavaScript, React.js, Next.js',
                'SQL, MySQL',
                'OOP',
                'Scrum, Agile',
            ];
            $this->skillTab = true;
            $this->experienceTab = false;
            $this->certificationTab = false;
        }
        if ($tab == 'experienceTab') {
            $this->list = [
                'experience',
            ];
            $this->experienceTab = true;
            $this->certificationTab = false;
            $this->skillTab = false;
        }
        if ($tab == 'certificationTab') {
            $this->list = [
                'certificationTab',
            ];
            $this->certificationTab = true;
            $this->experienceTab = false;
            $this->skillTab = false;
        }
        return $this->list;
    }

    public function mount()
    {
        $this->list = [
            'PHP, Laravel, Livewire',
            'HTML, CSS',
            'JavaScript, React.js, Next.js',
            'SQL, MySQL',
            'OOP',
            'Scrum, Agile',
        ];
    }
    public function render()
    {
        return view('livewire.qualification-section');
    }
}
