@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User id : {{ $user->id }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                value="{{ $user->name }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">IC</label>
                            <input
                                type="text"
                                class="form-control"
                                id="ic"
                                value="{{ $user->ic }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                value="{{ $user->email }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Password</label>
                            <input
                                type="text"
                                class="form-control"
                                id="password"
                                value="{{ $user->password }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Level</label>
                            <input
                                type="text"
                                class="form-control"
                                id="level"
                                value="{{ $user->level }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Address</label>
                            <input
                                type="text"
                                class="form-control"
                                id="address"
                                value="{{ $user->address }}"
                            >
                        </div>

                        <div class="form-group">
                            <label for="title">Phone Number</label>
                            <input
                                type="text"
                                class="form-control"
                                id="phone_num"
                                value="{{ $user->phone_num }}"
                            >
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('user:index')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
