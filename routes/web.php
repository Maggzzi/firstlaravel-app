<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// get is een request naar een server doet
// planeten is een url
Route::get('/planeten', function () {
    $myPlanets = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
    return $myPlanets;
});
