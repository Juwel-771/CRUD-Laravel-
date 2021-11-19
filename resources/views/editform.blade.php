<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Edit Form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST">
                    @csrf
                    @method('PUT') 
                    <label for="name" class="form-label">Your Name: </label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$student->name}}">
                    <br>
                    <label for="city" class="form-label">City: </label>
                    <input type="text" id="city" name="city" class="form-control" value="{{$student->city}}">
                    <br>
                    <label for="passing year" class="form-label">Passing Year: </label>
                    <input type="text" name="passing_year" id="passing_year" class="form-control" value="{{$student->passing_year}}">
                    <br>
                    <label for="marks" class="fomr-label">Marks: </label>
                    <input type="text" name="marks" id="marks" class="form-control" value="{{$student->marks}}">
                    <br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
