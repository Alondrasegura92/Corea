<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('Layouts.inicio');
});

Route::get('/inicio', function () {
  return view('Layouts.inicio');
});

Route::get('/cultura', function () {
  return view('Layouts.cultura');
});

Route::get('/gastronomia', function () {
  return view('Layouts.gastronomia');
});

Route::get('/turismo', function () {
  return view('Layouts.turismo');
});

Route::get('/contacto', function () {
  return view('Layouts.contacto');
});
