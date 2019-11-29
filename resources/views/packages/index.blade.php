@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Packages Details
                    <div class="float-right">
                        <a href="{{ route('package:create') }}" class="btn btn-primary">New</a>
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
                                <th>Package Type</th>
                                <th>Package Price</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{ $package->id}}</td>
                                            <td>{{ $package->packageType}}</td>
                                            <td>{{ $package->packagePrice}}</td>
                                            <td>
                                                <a href="{{ route('package:show',$package) }}" class="btn btn-success">Show</a>
                                                <a href="{{ route('package:edit',$package) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('package:delete', $package)}}" class="btn btn-danger"
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
