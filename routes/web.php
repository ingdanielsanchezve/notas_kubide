<?php

Route::get('/', 'NotasController@index')->name('notas.index');

Route::get('/notas/{id}', 'NotasController@show');

Route::get('/mostrar_favoritas', 'NotasController@showFavorites');

Route::get('/mostrar_no_favoritas', 'NotasController@showNoFavorites');

Route::get('/marcar_favorita/{id}', 'NotasController@setNoteIsFavorite');

Route::get('/editar_nota/{id}', 'NotasController@showEdit');

Route::get('/eliminar_nota/{id}', 'NotasController@delete');

Route::post('/notas', 'NotasController@create');

Route::post('/actualizar_notas', 'NotasController@updateNotes');