<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Menú 1

Route::get('/', function () {
    return view('inicio');
});

Route::get('/acercade', function(){
    return view('acercade');
})->name("acercade");

Route::get('/contactanos', function(){
    return view('contactanos');
})->name("contactanos");

Route::get('/ayuda', function(){
    return view('ayuda');
})->name("ayuda");

// Menú 2

Route::get('/catalogos', function(){
    return view('catalogos');
})->middleware("auth")->name("catalogos");

Route::get('/horarios', function(){
    return view('horarios');
})->middleware("auth")->name("horarios");

Route::get('/docentes', function(){
    return view('docentes');
})->middleware("auth")->name("docentes");

Route::get('/alumnos', function(){
    return view('alumnos');
})->middleware("auth")->name("alumnos");

Route::get('/proyectos', function(){
    return view('proyectos');
})->middleware("auth")->name("proyectos");

Route::get('/capacitacion', function(){
    return view('capacitacion');
})->middleware("auth")->name("capacitacion");

Route::get('/asesoriasdoc', function(){
    return view('asesoriasdoc');
})->middleware("auth")->name("asesoriasdoc");

Route::get('/projects', function(){
    return view('projects');
})->middleware("auth")->name("projects");

Route::get('/material', function(){
    return view('material');
})->middleware("auth")->name("material");

Route::get('/docencia', function(){
    return view('docencia');
})->middleware("auth")->name("docencia");

Route::get('/asesoriaspe', function(){
    return view('asesoriaspe');
})->middleware("auth")->name("asesoriaspe");

Route::get('/asesoriass', function(){
    return view('asesoriass');
})->middleware("auth")->name("asesoriass");

Route::get('/instrumentacion', function(){
    return view('instrumentacion');
})->middleware("auth")->name("instrumentacion");

Route::get('/tutorias', function(){
    return view('tutorias');
})->middleware("auth")->name("tutorias");

Route::get('/periodos', function(){
    return view('periodos');
})->middleware("auth")->name("periodos");

Route::get('/plazas', function(){
    return view('plazas');
})->middleware("auth")->name("plazas");

Route::get('/puestos', function(){
    return view('puestos');
})->middleware("auth")->name("puestos");

Route::get('/personal', function(){
    return view('personal');
})->middleware("auth")->name("personal");

Route::get('/deptos', function(){
    return view('deptos');
})->middleware("auth")->name("deptos");

Route::get('/carreras', function(){
    return view('carreras');
})->middleware("auth")->name("carreras");

Route::get('/reticulas', function(){
    return view('reticulas');
})->middleware("auth")->name("reticulas");

Route::get('/materias', function(){
    return view('materias');
})->middleware("auth")->name("materias");

Route::get('/alumnosc', function(){
    return view('alumnosc');
})->middleware("auth")->name("alumnosc");

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
