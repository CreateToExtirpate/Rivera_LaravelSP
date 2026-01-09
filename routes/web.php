<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); //Gives the Welcome view
});

//See Students Route
Route::get('/students', function () {
    return view('students.index');
});

// Add Student Route
Route::get('/students/create', function () {
    return view('students.create');
});

Route::get('/students/show', function(){
    return view('students.show');
});

Route::get('/students/edit', function(){
    return view('students.edit');
});
