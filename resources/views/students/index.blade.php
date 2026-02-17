
@extends('layout')

@section('title')
    Students
@endsection

@section('content')
    <x-body>
        <h1>STUDENT INDEX</h1>
        <button class="rounded m-3 btn-danger"><a href="/students/create">Add Student</a></button>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student['id'] }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['course'] }}</td>
                        <td>{{ $student['yearLevel'] }}</td>
                        <td>
                            <x-table_button :view="route('student.show' , ['student' => $student])" name="View" class="btn-success">
                            </x-table_button>
                            <x-table_button :view="route('student.edit', ['student' => $student])" name="Edit" class="btn-success">
                            </x-table_button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-body>
@endsection
