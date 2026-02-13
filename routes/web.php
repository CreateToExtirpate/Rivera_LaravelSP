<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

class StudentData {
    public static $students = [
//         INSERT INTO students (name, course, yearLevel, created_at)
// VALUES ('Jack Townsend', 'Computer Science', '3rd Year', CURRENT_TIMESTAMP),
//         ('Maria Santos', 'Information Technology', '2nd Year', CURRENT_TIMESTAMP),
//         ('David Kim', 'Software Engineering', '1st Year', CURRENT_TIMESTAMP),
//         ('Emily Johnson', 'Computer Science', '4th Year', CURRENT_TIMESTAMP),
//         ('Carlos Ramirez', 'Information Systems', '3rd Year', CURRENT_TIMESTAMP),
//         ('Sophia Lee', 'Data Science', '2nd Year', CURRENT_TIMESTAMP),
//         ('Michael Brown', 'Computer Engineering', '1st Year',CURRENT_TIMESTAMP),
//         ('Hannah Wilson', 'Information Technology', '4th Year', CURRENT_TIMESTAMP),
//         ('Joshua Miller', 'Software Engineering', '3rd Year', CURRENT_TIMESTAMP),
//         ('Olivia Davis', 'Computer Science', '2nd Year', CURRENT_TIMESTAMP),
//         ('Ethan Garcia', 'Information Systems', '1st Year', CURRENT_TIMESTAMP),
//         ('Isabella Martinez', 'Data Science', '3rd Year', CURRENT_TIMESTAMP),
//         ('Ryan Anderson', 'Computer Engineering', '2nd Year', CURRENT_TIMESTAMP),
//         ('Grace Thompson', 'Information Technology', '1st Year', CURRENT_TIMESTAMP),
//         ('Daniel White', 'Software Engineering', '4th Year', CURRENT_TIMESTAMP),
//         ('Chloe Harris', 'Computer Science', '3rd Year', CURRENT_TIMESTAMP),
//         ('Matthew Clark', 'Information Systems', '2nd Year', CURRENT_TIMESTAMP),
//         ('Ava Lewis', 'Data Science', '1st Year', CURRENT_TIMESTAMP),
//         ('Nathan Walker', 'Computer Engineering', '4th Year', CURRENT_TIMESTAMP),
//         ('Zoe Hall', 'Information Technology', '3rd Year', CURRENT_TIMESTAMP)
    ];  
}

Route::get('/', function () {
    return view('home'); //Gives the Welcome view
});

//View All Studenta
Route::get('/students', [StudentController::class, 'index'])->name('student.index');

// Add Student Route
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');

// Store an added student
Route::post('/students', [StudentController::class, 'store'])->name('student.store');

//Edit Student Route
Route::get('/students/show/{id}', function ($id) {
    $student = collect(StudentData::$students)->firstWhere('id', $id);

    return view('students.show', ['student' => $student]);
});

Route::get('/students/edit/{id}', function ($id) {
    $student = collect(StudentData::$students)->firstWhere('id', $id);
    return view('students.edit', ['student' => $student]);
});
