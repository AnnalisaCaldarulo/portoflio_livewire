<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class QualificationSection extends Component
{
    public $list;
    public $tab = 'skillTab'; // Default tab
    public $skillTab = true;
    public $experienceTab = false;
    public $certificationTab = false;

    public function openList($tab)
    {
        $this->tab = $tab;
        $this->list = $this->getList($tab);
    }

    protected function getList($tab)
    {
        switch ($tab) {
            case 'skillTab':
                $list = [
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
                break;
            case 'experienceTab':
                $list = [
                    'experience',
                ];
                $this->experienceTab = true;
                $this->certificationTab = false;
                $this->skillTab = false;
                break;
            case 'certificationTab':
                $list = [
                    'certificationTab',
                ];
                $this->certificationTab = true;
                $this->experienceTab = false;
                $this->skillTab = false;
                break;
        }
        return $list;
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
