<?php

use Illuminate\Support\Facades\Auth;

?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">change pid</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('pid.store') }}" method="post">
                            {{ csrf_field() }}
                            <label for="id">id:</label>
                            <input type="text" name="id" id="id" value="{{ Auth::user()->id }}" disabled>
                            <br>
                            <label for="name">full name:</label>
                            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                            <br>
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" value="{{ Auth::user()->email }}">
                            <br>
                            <label for="id_code">id code:</label>
                            <input type="number" name="id_code" id="id_code" value="{{ Auth::user()->id_code }}">
                            <br>
                            <label for="birth">birthday:</label>
                            <input type="date" name="birth" id="birth" value="{{ Auth::user()->birth }}">
                            <br>
                            <input type="submit" value="update">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
