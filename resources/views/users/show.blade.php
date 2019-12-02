@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show {{ $user->title }}</div>

                <div class="card-body">
                        <div class="form-group">
                            Id:
                            {{ $user->id}}
                        </div>
                        <div class="form-group">
                            Name:
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            IC:
                            {{ $user->ic}}
                        </div>

                        <div class="form-group">
                            Email:
                            {{ $user->email}}
                        </div>

                        <div class="form-group">
                            Password:
                            {{ $user->password}}
                        </div>

                        <div class="form-group">
                            Level:
                            {{ $user->level}}
                        </div>

                        <div class="form-group">
                            Address:
                            {{ $user->address}}
                        </div>

                        <div class="form-group">
                            Phone Number:
                            {{ $user->phone_num}}
                        </div>
                        
                        <div class="form-group">
                            <a href="{{ route('user:index')}}" class="btn btn-link">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
