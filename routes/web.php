<?php

use App\Http\Controllers\CertificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');


// skills
Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
Route::post('/skill/submit', [SkillController::class, 'store'])->name('skill.store');
Route::get('/skill/edit/{skill}', [SkillController::class, 'edit'])->name('skill.edit');
Route::put('/skill/update/{skill}', [SkillController::class, 'update'])->name('skill.update');


// exp
Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
Route::post('/experience/submit', [ExperienceController::class, 'store'])->name('experience.store');
Route::get('/experience/edit/{experience}', [ExperienceController::class, 'edit'])->name('experience.edit');
Route::put('/experience/update/{experience}', [ExperienceController::class, 'update'])->name('experience.update');




//cert
Route::get('/certification/create', [CertificationController::class, 'create'])->name('certification.create');
Route::post('/certification/submit', [CertificationController::class, 'store'])->name('certification.store');
Route::get('/certification/edit/{certification}', [CertificationController::class, 'edit'])->name('certification.edit');
Route::put('/certification/update/{certification}', [CertificationController::class, 'update'])->name('certification.update');

