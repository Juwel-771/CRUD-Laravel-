<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>CRUD Project</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 bg-info">
                <form action="" method="POST">
                    @csrf
                    <label for="name" class="form-label">Your Name: </label>
                    <input type="text" id="name" name="name" class="form-control">
                    <br>
                    <label for="city" class="form-label">City: </label>
                    <input type="text" id="city" name="city" class="form-control">
                    <br>
                    <label for="passing year" class="form-label">Passing Year: </label>
                    <input type="text" name="passing_year" id="passing_year" class="form-control">
                    <br>
                    <label for="marks" class="fomr-label">Marks: </label>
                    <input type="text" name="marks" id="marks" class="form-control">
                    <br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
            </div>
            <div class="col-sm-6 bg-warning">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>City</td>
                            <td>Passing Year</td>
                            <td>Marks</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->passing_year}}</td>
                                <td>{{ $item->marks }}</td>
                                <td>
                                    <a href="{{url('/edit', $item->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{url('/delete', $item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>