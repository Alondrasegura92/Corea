<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/inicio', function () {
  return view('layouts.inicio');
});

Route::get('/cultura', function () {
  return view('layouts.cultura');
});

Route::get('/gastronomia', function () {
  return view('layouts.gastronomia');
});

Route::get('/turismo', function () {
  return view('layouts.turismo');
});

Route::get('/contacto', function () {
  return view('layouts.contacto');
});
