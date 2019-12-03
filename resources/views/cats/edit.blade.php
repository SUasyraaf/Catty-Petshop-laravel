@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Cat id :{{ $cat->id }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Cat Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                value="{{ $cat->name }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Cat Breed</label>
                            <input
                                type="text"
                                class="form-control"
                                id="breed"
                                value="{{ $cat->breed }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Cat Age</label>
                            <input
                                type="text"
                                class="form-control"
                                id="breed"
                                value="{{ $cat->age }}"
                            >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('cat:index')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
