@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Edit Student</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="studentId" class="form-label">ID</label>
                        <input type="text" class="form-control" id="studentId" placeholder="Enter student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="studentName" placeholder="Enter full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="studentCourse" class="form-label">Course</label>
                        <input type="text" class="form-control" id="studentCourse" placeholder="Enter course" required>
                    </div>
                    <div class="mb-3">
                        <label for="yearLevel" class="form-label">Year Level</label>
                        <select class="form-select" id="yearLevel" required>
                            <option selected disabled>Select year level</option>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="card-footer bg-light">
                <button type="button" class="btn btn-primary">Add Student</button>
                <button type="button" class="btn btn-secondary ms-2">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection
