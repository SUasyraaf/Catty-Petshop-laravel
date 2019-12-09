@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Packages</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" >
                          </div>

                        <div class="form-group">
                          <label for="ic">IC</label>
                          <input type="text" name="ic" class="form-control" id="ic" >
                        </div>
                        
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" name="email" class="form-control" id="email" >
                        </div>
                        
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" name="password" class="form-control" id="password" >
                        </div>
                        
                        <!-- <div class="form-group">
                          <label for="level">Level</label>
                          <input type="text" name="level" class="form-control" id="level" >
                        </div> -->
                        
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" name="address" class="form-control" id="address" >
                        </div>
                        
                        <div class="form-group">
                          <label for="phone_num">Phone Number</label>
                          <input type="text" name="phone_num" class="form-control" id="phone_num" >
                        </div>

                        <button type="submit" name="submit" value="submit" class="btn btn-primary mb-2">Add Package</button>
                        <a href="{{ route('user:index') }}" class="btn btn-link">Cancel</a>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
