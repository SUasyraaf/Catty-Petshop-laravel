@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Packages Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Package Type</th>
                                <th scope="col">Package Price</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach ($packages as $package)
                                        <tr>
                                            <td>{{ $package->id}}</td>
                                            <td>{{ $package->packageType}}</td>
                                            <td>{{ $package->packagePrice}}</td>
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
