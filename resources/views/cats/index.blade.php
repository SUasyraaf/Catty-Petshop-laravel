<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cats Details
                        <div class="float-right">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                                <thead>
                                  <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Breed</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                        @foreach ($cats as $cat)
                                            <tr>
                                                <td>{{ $cat->id}}</td>
                                                <td>{{ $cat->name}}</td>
                                                <td>{{ $cat->breed}}</td>
                                                <td>{{ $cat->age}}</td>
                                                <td>
                                                    <a href="{{ route('cat:show',$cat) }}" class="btn btn-success">Show</a>
                                                    <a href="{{ route('cat:edit',$cat) }}" class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('cat:delete', $cat) }}" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


