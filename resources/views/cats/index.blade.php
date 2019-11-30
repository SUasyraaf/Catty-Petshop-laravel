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
                                <th>Name</th>
                                <th>Breed</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($cats as $cat)
                                        <tr>
                                            <td>{{ $cats->id}}</td>
                                            <td>{{ $cats->name}}</td>
                                            <td>{{ $cats->breed}}</td>
                                            <td>
                                                <a href="{{ route('cat:show',$cat) }}" class="btn btn-success">Show</a>
                                                <a href="{{ route('cat:edit',$cat) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('cat:delete', $cat) }}" class="btn btn-danger"
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
