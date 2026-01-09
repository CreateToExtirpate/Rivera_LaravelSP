<?php

use Illuminate\Support\Facades\Route;

// Welcome Page route when user reaches homepage (/)

/* Route::get is a method, it retrieves the file path*/
Route::get('/', function () {
    return view('home'); //Gives the Welcome view
});

//See Students Route
Route :: get('/students', function () {
    return view('students.students');
});

// Add Student Route
Route :: get('/students/add', function () {
    return view('add_student');
});