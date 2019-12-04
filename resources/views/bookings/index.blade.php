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
    <br><br><br><br>
    <body>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Booking details
                                <div class="float-right">
                                    <a href="{{ route('booking:create') }}" class="btn btn-primary">New Booking</a>
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
                                            <th>Check in</th>
                                            <th>Check out</th>
                                            <th>Payment</th>
                                            <th>User ID</th>
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($bookings as $booking)
                                                    <tr>
                                                        <td>{{ $booking->id }}</td>
                                                        <td>{{ $booking->day_in }}</td>
                                                        <td>{{ $booking->day_out }}</td>
                                                        <td>{{ $booking->user_id }}</td>
                                                        <td>{{ $booking->payment }}</td>
                                                        <td>
                                                            <a href="{{ route('booking:show',$booking) }}" class="btn btn-success">Show</a>
                                                            <a href="{{ route('booking:edit',$booking) }}" class="btn btn-primary">Edit</a>
                                                            <a href="{{ route('booking:delete', $booking)}}" class="btn btn-danger"
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


