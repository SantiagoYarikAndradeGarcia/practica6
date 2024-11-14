<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\HoraController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\PersonalPlazaController;
use App\Http\Controllers\ReticulaController;
use App\Http\Controllers\MateriaAbiertaController;
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

    Route::get('/Deptos.index', [DeptoController::class, 'index'])->name('Deptos.index');    // INDEX
    
    Route::get('/Deptos.create', [DeptoController::class, 'create'])->name('Deptos.create'); // CREATE
    Route::post('/Deptos.store', [DeptoController::class, 'store'])->name('Deptos.store');       
    
    Route::get('/Deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('Deptos.edit');       // EDIT
    Route::get('/Deptos.show/{depto}', [DeptoController::class, 'show'])->name('Deptos.show');       // VER
    
    Route::post('/Deptos.destroy/{depto}', [DeptoController::class, 'destroy'])->name('Deptos.destroy');// DESRTOY
    Route::post('/Deptos.update/{depto}', [DeptoController::class, 'update'])->name('Deptos.update');//UPDATE

    Route::get('/Carreras.index', [CarreraController::class, 'index'])->name('Carreras.index');    // INDEX
    
    Route::get('/Carreras.create', [CarreraController::class, 'create'])->name('Carreras.create'); // CREATE
    Route::post('/Carreras.store', [CarreraController::class, 'store'])->name('Carreras.store');       
    
    Route::get('/Carreras.edit/{carrera}', [CarreraController::class, 'edit'])->name('Carreras.edit');       // EDIT
    Route::get('/Carreras.show/{carrera}', [CarreraController::class, 'show'])->name('Carreras.show');       // VER
    
    Route::post('/Carreras.destroy/{carrera}', [CarreraController::class, 'destroy'])->name('Carreras.destroy');// DESRTOY
    Route::post('/Carreras.update/{carrera}', [CarreraController::class, 'update'])->name('Carreras.update');//UPDATE

    Route::get('/Reticulas.index', [ReticulaController::class, 'index'])->name('Reticulas.index');    // INDEX
    
    Route::get('/Reticulas.create', [ReticulaController::class, 'create'])->name('Reticulas.create'); // CREATE
    Route::post('/Reticulas.store', [ReticulaController::class, 'store'])->name('Reticulas.store');       
    
    Route::get('/Reticulas.edit/{reticula}', [ReticulaController::class, 'edit'])->name('Reticulas.edit');       // EDIT
    Route::get('/Reticulas.show/{reticula}', [ReticulaController::class, 'show'])->name('Reticulas.show');       // VER
    
    Route::post('/Reticulas.destroy/{reticula}', [ReticulaController::class, 'destroy'])->name('Reticulas.destroy');// DESRTOY
    Route::post('/Reticulas.update/{reticula}', [ReticulaController::class, 'update'])->name('Reticulas.update');//UPDATE

    Route::get('/Materias.index', [MateriaController::class, 'index'])->name('Materias.index');    // INDEX
    
    Route::get('/Materias.create', [MateriaController::class, 'create'])->name('Materias.create'); // CREATE
    Route::post('/Materias.store', [MateriaController::class, 'store'])->name('Materias.store');       
    
    Route::get('/Materias.edit/{materia}', [MateriaController::class, 'edit'])->name('Materias.edit');       // EDIT
    Route::get('/Materias.show/{materia}', [MateriaController::class, 'show'])->name('Materias.show');       // VER
    
    Route::post('/Materias.destroy/{materia}', [MateriaController::class, 'destroy'])->name('Materias.destroy');// DESRTOY
    Route::post('/Materias.update/{materia}', [MateriaController::class, 'update'])->name('Materias.update');//UPDATE

    Route::get('/Periodos.index', [PeriodoController::class, 'index'])->name('Periodos.index');    // INDEX
    
    Route::get('/Periodos.create', [PeriodoController::class, 'create'])->name('Periodos.create'); // CREATE
    Route::post('/Periodos.store', [PeriodoController::class, 'store'])->name('Periodos.store');       
    
    Route::get('/Periodos.edit/{periodo}', [PeriodoController::class, 'edit'])->name('Periodos.edit');       // EDIT
    Route::get('/Periodos.show/{periodo}', [PeriodoController::class, 'show'])->name('Periodos.show');       // VER
    
    Route::post('/Periodos.destroy/{periodo}', [PeriodoController::class, 'destroy'])->name('Periodos.destroy');// DESRTOY
    Route::post('/Periodos.update/{periodo}', [PeriodoController::class, 'update'])->name('Periodos.update');//UPDATE
    
    Route::get('/Personales.index', [PersonalController::class, 'index'])->name('Personales.index');    // INDEX
    
    Route::get('/Personales.create', [PersonalController::class, 'create'])->name('Personales.create'); // CREATE
    Route::post('/Personales.store', [PersonalController::class, 'store'])->name('Personales.store');       
    
    Route::get('/Personales.edit/{personal}', [PersonalController::class, 'edit'])->name('Personales.edit');       // EDIT
    Route::get('/Personales.show/{personal}', [PersonalController::class, 'show'])->name('Personales.show');       // VER
    
    Route::post('/Personales.destroy/{personal}', [PersonalController::class, 'destroy'])->name('Personales.destroy');// DESRTOY
    Route::post('/Personales.update/{personal}', [PersonalController::class, 'update'])->name('Personales.update');//UPDATE

    Route::get('/Edificios.index', [EdificioController::class, 'index'])->name('Edificios.index');    // INDEX
    
    Route::get('/Edificios.create', [EdificioController::class, 'create'])->name('Edificios.create'); // CREATE
    Route::post('/Edificios.store', [EdificioController::class, 'store'])->name('Edificios.store');       
    
    Route::get('/Edificios.edit/{edificio}', [EdificioController::class, 'edit'])->name('Edificios.edit');       // EDIT
    Route::get('/Edificios.show/{edificio}', [EdificioController::class, 'show'])->name('Edificios.show');       // VER
    
    Route::post('/Edificios.destroy/{edificio}', [EdificioController::class, 'destroy'])->name('Edificios.destroy');// DESRTOY
    Route::post('/Edificios.update/{edificio}', [EdificioController::class, 'update'])->name('Edificios.update');//UPDATE

    Route::get('/Horas.index', [HoraController::class, 'index'])->name('Horas.index');    // INDEX
    
    Route::get('/Horas.create', [HoraController::class, 'create'])->name('Horas.create'); // CREATE
    Route::post('/Horas.store', [HoraController::class, 'store'])->name('Horas.store');       
    
    Route::get('/Horas.edit/{hora}', [HoraController::class, 'edit'])->name('Horas.edit');       // EDIT
    Route::get('/Horas.show/{hora}', [HoraController::class, 'show'])->name('Horas.show');       // VER
    
    Route::post('/Horas.destroy/{hora}', [HoraController::class, 'destroy'])->name('Horas.destroy');// DESRTOY
    Route::post('/Horas.update/{hora}', [HoraController::class, 'update'])->name('Horas.update');//UPDATE

    Route::get('/Lugares.index', [LugarController::class, 'index'])->name('Lugares.index');    // INDEX
    
    Route::get('/Lugares.create', [LugarController::class, 'create'])->name('Lugares.create'); // CREATE
    Route::post('/Lugares.store', [LugarController::class, 'store'])->name('Lugares.store');       
    
    Route::get('/Lugares.edit/{lugar}', [LugarController::class, 'edit'])->name('Lugares.edit');       // EDIT
    Route::get('/Lugares.show/{lugar}', [LugarController::class, 'show'])->name('Lugares.show');       // VER
    
    Route::post('/Lugares.destroy/{lugar}', [LugarController::class, 'destroy'])->name('Lugares.destroy');// DESRTOY
    Route::post('/Lugares.update/{lugar}', [LugarController::class, 'update'])->name('Lugares.update');//UPDATE

    Route::get('/PersonalPlazas.index', [PersonalPlazaController::class, 'index'])->name('PersonalPlazas.index');    // INDEX
    
    Route::get('/PersonalPlazas.create', [PersonalPlazaController::class, 'create'])->name('PersonalPlazas.create'); // CREATE
    Route::post('/PersonalPlazas.store', [PersonalPlazaController::class, 'store'])->name('PersonalPlazas.store');       
    
    Route::get('/PersonalPlazas.edit/{personalplaza}', [PersonalPlazaController::class, 'edit'])->name('PersonalPlazas.edit');       // EDIT
    Route::get('/PersonalPlazas.show/{personalplaza}', [PersonalPlazaController::class, 'show'])->name('PersonalPlazas.show');       // VER
    
    Route::post('/PersonalPlazas.destroy/{personalplaza}', [PersonalPlazaController::class, 'destroy'])->name('PersonalPlazas.destroy');// DESRTOY
    Route::post('/PersonalPlazas.update/{personalplaza}', [PersonalPlazaController::class, 'update'])->name('PersonalPlazas.update');//UPDATE

    Route::get('/materiasa.index', [MateriaAbiertaController::class, 'index'])->name('materiasa.index');    // INDEX


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
