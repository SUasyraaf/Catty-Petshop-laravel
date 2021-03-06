@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Catty Petshop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">USER Dashboard</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                You are logged in as <strong>USERS</strong>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
            <div class="content">
                <div class="title m-b-md">
                    CATTY PETSHOP
                </div>

                <div class="links">
                    <h3><a href="{{ route('package:indexcust') }}">[List of Package]</a>
                    <a href="{{ route('room:indexcust') }}">[List of Room]</a></h3>

                    <br><br><br>
                    <h3>CAT <br>
                    <a href="{{ route('cat:indexcust') }}">Register your cat</a>
                    </h3>

                    <br><br><br>
                    <h3>BOOKING <br>
                    <a href="{{ route('booking:index') }}">Make a booking </a>
                    </h3>
                </div>
            </div>
        </body>
    </html>


