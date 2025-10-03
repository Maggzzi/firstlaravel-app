<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PlanetsController;

Route::get('/', function () {
    return view('welcome');
});

// get is een request dat naar een server doet
// planeten is een url
// Route::get('/planets', [PlanetsController::class, 'index']);


// Alle planeten route
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

    return view("planeten", ['planeten' => $planeten]);
});


//Één planeet route
Route::get('/planeten/{planeet}', function($planeet) {

    $planeten = collect([

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
    ]);

    $result = $planeten->firstWhere('name', ucfirst(strtolower($planeet)));

    return view('planeet-detail', ['planeet' => $result]);
});