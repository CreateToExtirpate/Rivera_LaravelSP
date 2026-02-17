@extends('layout')

@section('title')
    Edit
@endsection

@section('content')
    <x-body>
        <form method="post" action="{{ route('student.update', ['student' => $student]) }}">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Edit Student</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="studentId" class="form-label">ID</label>
                                <input type="text" class="form-control" id="studentId" value="{{ $student['id'] }}"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="studentName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="studentName" value="{{ $student['name'] }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="studentCourse" class="form-label">Course</label>
                                <input type="text" name="course" class="form-control" id="studentCourse"
                                    value="{{ $student['course'] }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="yearLevel" class="form-label">Year Level</label>
                                <select class="form-select" name="yearLevel" id="yearLevel" required>
                                    <option disabled>Select year level</option>
                                    <option value="1st Year" {{ $student['yearLevel'] === '1st Year' ? 'selected' : '' }}>1st
                                        Year</option>
                                    <option value="2nd Year" {{ $student['yearLevel'] === '2nd Year' ? 'selected' : '' }}>2nd
                                        Year</option>
                                    <option value="3rd Year" {{ $student['yearLevel'] === '3rd Year' ? 'selected' : '' }}>3rd
                                        Year</option>
                                    <option value="4th Year" {{ $student['yearLevel'] === '4th Year' ? 'selected' : '' }}>4th
                                        Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                            <x-table_button :view="url('/students')" name="Back" class="btn-primary"></x-table_button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-body>
@endsection
