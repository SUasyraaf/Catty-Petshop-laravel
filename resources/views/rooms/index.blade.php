@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Room Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Room</th>
                                <th scope="col">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{ $room->id}}</td>
                                            <td>{{ $room->roomType}}</td>
                                            <td>{{ $room->roomPrice}}</td>
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
