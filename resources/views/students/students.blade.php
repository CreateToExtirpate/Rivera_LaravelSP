<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Portal | Students</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="#" class="navbar-brand">Student Portal</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Info -->
     <section class="bg-light text-dark p-5 center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-item-center justify-content-between mb-4">
                <div class="me-5">
                    <h1>View Students</h1>
                </div>
                <button class="btn btn-success btn-lg"><a href="/students/add">Add Student</a></button>
            </div>
            <div>
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- TODO: ENABLE THIS ONCE YOU HAVE THE SAMPLES --}}
                        {{-- @foreach ($samples as $sample)
                        <tr>
                            <td>{{ $sample->id }}</td>
                            <td>{{ $sample->name }}</td>
                            <td>{{ $sample->course }}</td>
                            <td>{{ $sample->year }}</td>
                        </tr>
                        @endforeach --}}
                        <tr>
                            <th>2</th>
                            <th>Jane Doe</th>
                            <th>22</th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>Doe Doe</th>
                            <th>15</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </section>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
