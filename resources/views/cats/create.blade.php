@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Cat</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="packageType">Package Type</label>
                            <input type="text" name="packageType" class="form-control" id="packageType" >
                          </div>

                        <div class="form-group">
                          <label for="packagePrice">Package Price</label>
                          <input type="text" name="packagePrice" class="form-control" id="packagePrice" >
                        </div>

                        <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Add Package</button>
                        <a href="{{ route('package:index') }}" class="btn btn-link">Cancel</a>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
