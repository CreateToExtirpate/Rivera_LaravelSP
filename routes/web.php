<?php

use Illuminate\Support\Facades\Route;

class StudentData {
    public static $students = [
        ['id' => 'S0001', 'name' => 'Jack Townsend', 'course' => 'Computer Science', 'yearLevel' => '3rd Year'],
        ['id' => 'S0002', 'name' => 'Maria Santos', 'course' => 'Information Technology', 'yearLevel' => '2nd Year'],
        ['id' => 'S0003', 'name' => 'David Kim', 'course' => 'Software Engineering', 'yearLevel' => '1st Year'],
        ['id' => 'S0004', 'name' => 'Emily Johnson', 'course' => 'Computer Science', 'yearLevel' => '4th Year'],
        ['id' => 'S0005', 'name' => 'Carlos Ramirez', 'course' => 'Information Systems', 'yearLevel' => '3rd Year'],
        ['id' => 'S0006', 'name' => 'Sophia Lee', 'course' => 'Data Science', 'yearLevel' => '2nd Year'],
        ['id' => 'S0007', 'name' => 'Michael Brown', 'course' => 'Computer Engineering', 'yearLevel' => '1st Year'],
        ['id' => 'S0008', 'name' => 'Hannah Wilson', 'course' => 'Information Technology', 'yearLevel' => '4th Year'],
        ['id' => 'S0009', 'name' => 'Joshua Miller', 'course' => 'Software Engineering', 'yearLevel' => '3rd Year'],
        ['id' => 'S0010', 'name' => 'Olivia Davis', 'course' => 'Computer Science', 'yearLevel' => '2nd Year'],
        ['id' => 'S0011', 'name' => 'Ethan Garcia', 'course' => 'Information Systems', 'yearLevel' => '1st Year'],
        ['id' => 'S0012', 'name' => 'Isabella Martinez', 'course' => 'Data Science', 'yearLevel' => '3rd Year'],
        ['id' => 'S0013', 'name' => 'Ryan Anderson', 'course' => 'Computer Engineering', 'yearLevel' => '2nd Year'],
        ['id' => 'S0014', 'name' => 'Grace Thompson', 'course' => 'Information Technology', 'yearLevel' => '1st Year'],
        ['id' => 'S0015', 'name' => 'Daniel White', 'course' => 'Software Engineering', 'yearLevel' => '4th Year'],
        ['id' => 'S0016', 'name' => 'Chloe Harris', 'course' => 'Computer Science', 'yearLevel' => '3rd Year'],
        ['id' => 'S0017', 'name' => 'Matthew Clark', 'course' => 'Information Systems', 'yearLevel' => '2nd Year'],
        ['id' => 'S0018', 'name' => 'Ava Lewis', 'course' => 'Data Science', 'yearLevel' => '1st Year'],
        ['id' => 'S0019', 'name' => 'Nathan Walker', 'course' => 'Computer Engineering', 'yearLevel' => '4th Year'],
        ['id' => 'S0020', 'name' => 'Zoe Hall', 'course' => 'Information Technology', 'yearLevel' => '3rd Year'],
    ];  
}

Route::get('/', function () {
    return view('home'); //Gives the Welcome view
});

//See Students Route
Route::get('/students', function () {
    return view('students.index', ['students' => StudentData::$students]);
});

// Add Student Route
Route::get('/students/create', function () {
    return view('students.create');
});

//Edit Student Route
Route::get('/students/show/{id}', function ($id) {
    $student = collect(StudentData::$students)->firstWhere('id', $id);

    return view('students.show', ['student' => $student]);
});

Route::get('/students/edit/{id}', function ($id) {
    $student = collect(StudentData::$students)->firstWhere('id', $id);
    return view('students.edit', ['student' => $student]);
});
