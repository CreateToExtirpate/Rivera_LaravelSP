@extends('layout')

@section('title')
Show
@endsection

{{-- Student Information will be seen here: --}}
@section('content')
    <x-body>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">View Student</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="studentId" class="form-label">ID</label>
                                <input type="text" class="form-control" id="studentId" value="{{ $student['id'] }}" readonly 
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="studentName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="studentName" value="{{ $student['name'] }}" readonly
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="studentCourse" class="form-label">Course</label>
                                <input type="text" class="form-control" id="studentCourse" value="{{ $student['course'] }}" readonly
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="yearLevel" class="form-label">Year Level</label>
                                <select class="form-select" id="yearLevel" required>
                                    <option selected>{{ $student['yearLevel'] }}</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light">
                        <x-table_button :view="url('/students')" name="Back" class="btn-primary"></x-table_button>
                    </div>
                </div>
            </div>
        </div>
    </x-body>
@endsection
