@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show {{ $booking->title }}</div>

                <div class="card-body">
                        <div class="form-group">
                            Id:
                            {{ $booking->id}}
                        </div>
                        <div class="form-group">
                            Check in date:
                            {{ $booking->day_in }}
                        </div>
                        <div class="form-group">
                            Check in date:
                            {{ $booking->day_out}}
                        </div>

                        <div class="form-group">
                            Payment:
                            {{ $booking->payment}}
                        </div>

                        <div class="form-group">
                            Package Type:
                            {{ $booking->package_id}}
                        </div>

                        <div class="form-group">
                            Room Type:
                            {{ $booking->room_id}}
                        </div>

                        <div class="form-group">
                            Cat ID:
                            {{ $booking->cat_id}}
                        </div>

                        <div class="form-group">
                            Owner ID:
                            {{ $booking->user_id}}
                        </div>

                        <div class="form-group">
                            <a href="{{ route('booking:index')}}" class="btn btn-link">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
