@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Room</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="roomType">Room Type</label>
                            <input type="text" name="roomType" class="form-control" id="roomType" >
                          </div>

                        <div class="form-group">
                          <label for="roomPrice">Room Price</label>
                          <input type="text" name="roomPrice" class="form-control" id="roomPrice" >
                        </div>

                        <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Add Room</button>
                        <a href="{{ route('room:index') }}" class="btn btn-link">Cancel</a>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
