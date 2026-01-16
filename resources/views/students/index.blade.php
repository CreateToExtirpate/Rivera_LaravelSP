@props(['edit'])

@extends('layout')

@section('title')
    Students
@endsection

@section('content')
    <x-body>
        <h1>STUDENT INDEX</h1>
        <button class="rounded m-3"><a href="/students/create">Add Student</a></button>
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
                            <x-table_button class="btn-success">
                                :view=url('/students/' . $sample )
                            </x-table_button>
                            <button class=""><a href="/students/show">View</a></button>
                            <button class=""><a href="/students/edit">Edit</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-body>
@endsection
