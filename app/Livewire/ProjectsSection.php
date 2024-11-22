<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectsSection extends Component
{
    public $projects;
    public $tab = "All";
    public $all = true;
    public $backend = false;
    public $frontend = false;

    public function openList($tab)
    {
        $this->tab = $tab;
        $this->projects = $this->getList($tab);
    }

    protected function getList($tab)
    {
        switch ($tab) {
            case 'all':
                $projects = Project::orderBy('created_at', 'desc')->get();
                $this->all = true;
                $this->frontend = false;
                $this->backend = false;
                break;
            case 'frontend':
                $projects = Project::where('category_id', 1)->orderBy('created_at', 'desc')->get();
                $this->frontend = true;
                $this->backend = false;
                $this->all = false;
                break;
            case 'backend':
                $projects = Project::where('category_id', 2)->orderBy('created_at', 'desc')->get();
                $this->backend = true;
                $this->frontend = false;
                $this->all = false;
                break;
        }
        return $projects;
    }

    public function mount()
    {
        $this->projects = Project::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.projects-section');
    }
}
