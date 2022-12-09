<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class)->name('home');

/* Route::controller(EventoController::class)-> group(function(){
    Route:: get('eventos', 'index')->name('eventos.index');
    Route:: get('eventos/create',  'create')->name('eventos.create');
    Route:: post('eventos',  'store')->name('eventos.store');
    Route:: get('eventos/{evento}', 'show')->name('eventos.show');
    Route:: get('eventos/{evento}/edit',  'edit')->name('eventos.edit');
    Route:: put('eventos/{evento}',  'update')->name('eventos.update');
    Route::delete('eventos/{evento}', 'destroy')->name('eventos.destroy');

});
 */

 


