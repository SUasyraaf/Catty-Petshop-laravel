@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Room Details
                    <div class="float-right">
                        <a href="{{ route('room:create') }}" class="btn btn-primary">New</a>
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
                                <th>id</th>
                                <th>Room</th>
                                <th>Price</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{ $room->id}}</td>
                                            <td>{{ $room->roomType}}</td>
                                            <td>{{ $room->roomPrice}}</td>
                                            <td>
                                                <a href="{{ route('room:show',$room) }}" class="btn btn-success">Show</a>
                                                <a href="{{ route('room:edit',$room) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('room:delete',$room) }}" class="btn btn-danger"
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
