@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User id :{{ $package->id }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Package Type</label>
                            <input
                                type="text"
                                class="form-control"
                                name="packageType"
                                id="packageType"
                                value="{{ $package->packageType }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Package Price</label>
                            <input
                                type="text"
                                class="form-control"
                                name="packagePrice"
                                id="packagePrice"
                                value="{{ $package->packagePrice }}"
                            >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('package:index')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
