@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer details
                    <div class="float-right">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>IC</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->ic }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phone_num }}</td>
                                            <td>
                                                <a href="{{ route('user:show',$user) }}" class="btn btn-success">Show</a>
                                                <a href="{{ route('user:edit',$user) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('user:delete', $user)}}" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
