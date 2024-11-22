<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Spatie\LivewireFilepond\WithFilePond;

use function PHPSTORM_META\map;

class CreateProjectForm extends Component
{
    use WithFilePond;
    #[Validate]
    public $img;
    #[Validate]
    public $name;
    #[Validate]
    public $stack;
    #[Validate]
    public $category;
    #[Validate]
    public $github;
    #[Validate]
    public $preview;
    #[Validate]
    public $description;

    public $image;
    public function rules()
    {
        return [
            'img' => 'mimetypes:image/jpg,image/jpeg,image/png|max:3000|nullable',
            'name' => 'required',
            'stack' => 'required',
            'category' => 'required|integer|between:1,2',
            'github' => 'url|nullable',
            'preview' => 'url|nullable',
            'description'=> 'required'
        ];
    }
   

    public function createProject(){
        $this->validate();
        Project::create([
            'img' => $this->img ? $this->img->store('img', 'public') : null,
            'name' => $this->name,
            'stack' => $this->stack,
            'category_id' => $this->category,
            'github' => $this->github,
            'preview' => $this->preview,
            'description'=>$this->description
        ]);
        session()->flash('success', 'Progetto caricato');
    }
    public function render()
    {
        return view('livewire.create-project-form');
    }
}
