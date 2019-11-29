@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show {{ $package->title }}</div>

                <div class="card-body">
                        <div class="form-group">
                            Id:
                            {{ $package->id}}
                        </div>
                        <div class="form-group">
                            Package Type:
                            {{ $package->packageType }}
                        </div>
                        <div class="form-group">
                            Package Price:
                            {{ $package->packagePrice}}
                        </div>

                        <div class="form-group">
                            <a href="{{ route('package:index')}}" class="btn btn-link">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
