@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User id : {{ $booking->id }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Check in Date</label>
                            <input
                                type="date"
                                name="day_in"
                                class="form-control"
                                id="day_in"
                                value="{{ $booking->day_in }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Check out Date</label>
                            <input
                                type="date"
                                name="day_out"
                                class="form-control"
                                id="day_out"
                                value="{{ $booking->day_out }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Payment</label>
                            <input
                                type="text"
                                name="payment" id="payment"
                                class="form-control"{{ $booking->payment }}
                            >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('booking:index')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
