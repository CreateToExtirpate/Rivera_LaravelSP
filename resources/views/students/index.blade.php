@extends('layout')

@section('title')
    Students
@endsection

@section('content')
    <h1>STUDENT INDEX</h1>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year Leve</th>
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
                    <td><button class="">View</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
