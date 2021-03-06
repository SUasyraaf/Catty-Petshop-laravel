@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show {{ $room->id }}</div>

                <div class="card-body">
                        <div class="form-group">
                            Id:
                            {{ $room->id }}
                        </div>
                        <div class="form-group">
                            Package Type:
                            {{ $room->roomType }}
                        </div>
                        <div class="form-group">
                            Package Price:
                            {{ $room->roomPrice }}
                        </div>

                        <div class="form-group">
                            <a href="{{ route('room:index')}}" class="btn btn-link">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
