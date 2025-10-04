<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // sleep(2);
    return Inertia::render('Home');
});

// Route::get('/about', function () {
//     return inertia('About', ['user' => 'Neha']);
// });


Route::inertia('/about', 'About', ['user' => 'Mike']);
