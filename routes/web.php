<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProfileController;

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

    Route::get('/Alumnos2.index', [AlumnoController::class, 'index'])->name('Alumnos2.index');    // INDEX
    
    Route::get('/Alumnos2.create', [AlumnoController::class, 'create'])->name('Alumnos2.create'); // CREATE
    Route::post('/Alumnos2.store', [AlumnoController::class, 'store'])->name('Alumnos2.store');       
    
    Route::get('/Alumnos2.edit/{alumno}', [AlumnoController::class, 'edit'])->name('Alumnos2.edit');       // EDIT
    Route::get('/Alumnos2.show/{alumno}', [AlumnoController::class, 'show'])->name('Alumnos2.show');       // VER
    
    Route::post('/Alumnos2.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('Alumnos2.destroy');// DESRTOY
    Route::post('/Alumnos2.update/{alumno}', [AlumnoController::class, 'update'])->name('Alumnos2.update');//UPDATE  

    Route::get('/Plazas.index', [PlazaController::class, 'index'])->name('Plazas.index');    // INDEX
    
    Route::get('/Plazas.create', [PlazaController::class, 'create'])->name('Plazas.create'); // CREATE
    Route::post('/Plazas.store', [PlazaController::class, 'store'])->name('Plazas.store');       
    
    Route::get('/Plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('Plazas.edit');       // EDIT
    Route::get('/Plazas.show/{plaza}', [PlazaController::class, 'show'])->name('Plazas.show');       // VER
    
    Route::post('/Plazas.destroy/{plaza}', [PlazaController::class, 'destroy'])->name('Plazas.destroy');// DESRTOY
    Route::post('/Plazas.update/{plaza}', [PlazaController::class, 'update'])->name('Plazas.update');//UPDATE

    Route::get('/Puestos.index', [PuestoController::class, 'index'])->name('Puestos.index');    // INDEX
    
    Route::get('/Puestos.create', [PuestoController::class, 'create'])->name('Puestos.create'); // CREATE
    Route::post('/Puestos.store', [PuestoController::class, 'store'])->name('Puestos.store');       
    
    Route::get('/Puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('Puestos.edit');       // EDIT
    Route::get('/Puestos.show/{puesto}', [PuestoController::class, 'show'])->name('Puestos.show');       // VER
    
    Route::post('/Puestos.destroy/{puesto}', [PuestoController::class, 'destroy'])->name('Puestos.destroy');// DESRTOY
    Route::post('/Puestos.update/{puesto}', [PuestoController::class, 'update'])->name('Puestos.update');//UPDATE

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
