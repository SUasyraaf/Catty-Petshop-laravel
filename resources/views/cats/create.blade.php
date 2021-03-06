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
                            <label for="name">Cat Name</label>
                            <input type="text" name="name" class="form-control" id="name" >
                          </div>

                          <div class="form-group">
                            <label for="breed">Cat Breed</label>
                            <input type="text" name="breed" class="form-control" id="breed" >
                          </div>

                        <div class="form-group">
                          <label for="age">Cat Age</label>
                          <input type="text" name="age" class="form-control" id="age" >
                        </div>

                        <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Add cat</button>

                        <a href="{{ route('cat:index') }}" class="btn btn-link">Cancel</a>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
