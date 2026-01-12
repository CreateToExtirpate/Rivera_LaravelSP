@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="d-sm-flex align-item-center justify-content-between">
        <div class="me-5">
            <h1>Welcome to the Student's Portal</span></h1>
            <p class="lead my-4">Access the student portal to manage and view students.</p>
            <button class="btn btn-success btn-lg"><a href="/students">Manage Students</a></button>
        </div>
        <img class="img-fluid w-50 d-none d-sm-block" src="YourWhale.png" alt="WhaleImageHere">
    </div>
@endsection

