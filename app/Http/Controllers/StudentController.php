<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //timestamp 31:40
    public function index() {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    //timestamp 16:23
    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'course' => 'required',
            'yearLevel' => 'required'
        ]);

        $newStudent = Student::create($data);
        return redirect(route('student.index'));
    }
}
