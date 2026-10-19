<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

// Página Principal
Route::get('/', function () {
    return view('home');
})->name('home');

// NOSOTROS & CAPACIDADES
Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('nosotros');

Route::get('/capacidades', function () {
    return view('pages.capacidades');
})->name('capacidades');

// PROYECTOS
Route::get('/proyectos', function () {
    return view('pages.proyectos');
})->name('proyectos');

// SERVICIOS
Route::get('/servicios', function () {
    return view('pages.servicios');
})->name('servicios');

// Subrutas de Detalle de Servicios
Route::prefix('servicios')->name('servicios.')->group(function () {
    Route::get('/manufactura', function () {
        return view('pages.servicios.manufactura');
    })->name('manufactura');

    Route::get('/recubrimientos', function () {
        return view('pages.servicios.recubrimientos');
    })->name('recubrimientos');

    Route::get('/maquinado', function () {
        return view('pages.servicios.maquinado');
    })->name('maquinado');

    Route::get('/construccion', function () {
        return view('pages.servicios.construccion');
    })->name('construccion');

    Route::get('/scrap', function () {
        return view('pages.servicios.scrap');
    })->name('scrap');
});

// GALERÍA
Route::prefix('galeria')->name('galeria.')->group(function () {
    Route::get('/instalaciones', function () {
        return view('pages.galeria.instalaciones');
    })->name('instalaciones');

    Route::get('/instalaciones/recubrimientos', function () {
        return view('pages.galeria.recubrimientos.r_loseta');
    })->name('recubrimientos');

    Route::get('/instalaciones/desmantelamientos', function () {
        return view('pages.galeria.desmantelamiento.d_desmantelamiento');
    })->name('desmantelamiento');

    Route::get('/instalaciones/fabricacion', function () {
        return view('pages.galeria.fabricacion.f_fabricacion');
    })->name('fabricacion');

    Route::get('/mas/galeria_imagenes', function () {
        return view('pages.galeria.mas.mas');
    })->name('mas');
});

// CONTACTO (Controlador)
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');
