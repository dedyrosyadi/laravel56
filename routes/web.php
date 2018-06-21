<?php

Route::get('', 'BarangController@index')->name('index');
Route::get('create', 'BarangController@create')->name('create');
Route::post('insert', 'BarangController@insert')->name('insert');
Route::get('delete/{id}', 'BarangController@delete')->name('delete');
