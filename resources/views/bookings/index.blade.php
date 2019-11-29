@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Booking details</div>

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
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($bookings as $booking)
                                        <tr>
                                            <td>{{ $booking->id}}</td>
                                            <td>{{ $booking->day_in}}</td>
                                            <td>{{ $booking->day_out}}</td>
                                            <td>{{ $booking->payment}}</td>
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
@endsection
