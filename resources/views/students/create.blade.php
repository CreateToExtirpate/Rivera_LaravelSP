@extends('layout')

@section('title')
    Create
@endsection

@section('content')
    <x-body>
        <form method="post" action="{{ route('student.store') }}">
            @csrf
            @method('post')
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Create Student</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="studentName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="studentName" placeholder="Enter full name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="studentCourse" class="form-label">Course</label>
                                <input type="text" name="course" class="form-control" id="studentCourse" placeholder="Enter course"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="yearLevel" class="form-label">Year Level</label>
                                <select class="form-select" name="yearLevel" id="yearLevel" required>
                                    <option selected disabled>Select year level</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <button type="submit" class="btn btn-primary">Add Student</button>
                            <button type="button" class="btn btn-secondary ms-2">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-body>
@endsection
