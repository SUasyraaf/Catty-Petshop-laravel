@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User id :{{ $room->id }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Package Type</label>
                            <input
                                type="text"
                                name="roomType"
                                class="form-control"
                                id="roomType"
                                value="{{ $room->roomType}}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Package Price</label>
                            <input
                                type="text"
                                name="roomPrice"
                                class="form-control"
                                id="roomPrice"
                                value="{{ $room->roomPrice}}"
                            >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('room:index')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
