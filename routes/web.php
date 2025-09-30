<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PlanetsController;

Route::get('/', function () {
    return view('welcome');
});

// get is een request dat naar een server doet
// planeten is een url
// Route::get('/planets', [PlanetsController::class, 'index']);


Route::get('/planeten', function () {

    $planeten = [
    [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
    ],
    [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
    ],
    [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
    ],
    [
        'name' => 'Jupiter',
        'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ]
];

    // maak collection van planets (en niet voor elke array hardcoded schrijven)
    $collection = collect($planeten);

    // wordt gecheckt of GET-parameter al bestaat door (request()->has())
    if (request()->has('planeet')) {
        $search = request('planeet');
        // filtreet nu op name
        $collection = $collection->where('name', ucfirst(strtolower($search)));
        
    }

    return view("planeten", ['planeten' => $collection->all()]);
});






