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
                          <input type="date"  name="day_in" class="form-control" id="day_in" >
                        </div>

                        <div class="form-group">
                            <label for="Check Out">Check Out</label>
                            <input type="date" name="day_out" class="form-control" id="day_out" >
                        </div>


                        <!-- DROP DOWN BUTTON FOR PACKAGE -->
                        <div class="btn-group" name="package">
                            <button type="button" class="btn btn-primary dropdown-toggle" name="package" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Choose Package
                            </button>
                            <div class="dropdown-menu">
                            @foreach ($packages as $package)

                                <a class="dropdown-item" href="#" value="{{ $package->id }}">{{ $package->packageType }}</a>
                            @endforeach
                            </div>
                        </div>

                        {{-- <select name="package">
                            @foreach ($packages as $package)
                                <option value="{{ $package->id }}">{{ $package->packageType }}</option>
                            @endforeach
                         </select> --}}



                        <!-- DROP DOWN BUTTON FOR ROOM -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Choose Room
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($rooms as $room)
                                    <a class="dropdown-item" href="#">{{ $room->roomType }}</a>
                                @endforeach
                            </div>
                        </div>

                        <!-- DROP DOWN BUTTON FOR CAT ID -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cat Id
                            </button>
                            <div class="dropdown-menu">
                                @foreach ($cats as $cat)
                                    <a class="dropdown-item" href="#">{{ $cat->id }}</a>
                                @endforeach
                            </div>
                        </div><br>

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
