@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Booking Payment</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="Check In">Check In</label>
                          <input type="date"  name="checkin" class="form-control" id="day_in" >
                        </div>

                        <div class="form-group">
                            <label for="Check Out">Check Out</label>
                            <input type="date" name="checkout" class="form-control" id="day_out" >
                          </div>

                        <div class="form-group">
                          <label for="Payment">Payment</label>
                          <input type="text" name="payment" class="form-control" id="payment" >
                        </div>

                        <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Make Payment</button>
                        <a href="{{ route('booking:index') }}" class="btn btn-link">Cancel</a>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
