@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show {{ $cat->title }}</div>

                <div class="card-body">
                        <div class="form-group">
                            Cat Id :
                            {{ $cat->id}}
                        </div>
                        <div class="form-group">
                            Cat Name :
                            {{ $cat->name }}
                        </div>
                        <div class="form-group">
                            Breed :
                            {{ $cat->breed }}
                        </div>
                        <div class="form-group">
                            Cat Age:
                            {{ $cat->age }}
                        </div>

                        <div class="form-group">
                            <a href="{{ route('cat:index')}}" class="btn btn-link">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
