<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'stack', 'category_id', 'githubUrl', 'previewUrl', 'img'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
