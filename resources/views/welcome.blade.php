@extends('layouts.layout')
@section('content')
<div class="full-height">
    @if (Route::has('login'))
    <div class="top-right">
        @auth
        <a class="links" href="{{ url('/home') }}">Home</a>
        @else
        <a class="links" href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
        <a class="links" href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif
    <div class="flex-center">
        <div class="content">
            @if(session()->has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Delicious!</strong> {{session('msg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <img class="logo-main" src="/img/papa-johns-logo.png" alt="papa johns logo" srcset="">
            <div class="title m-b-md">
                Better Ingredients
                <br>
                Better Pizza
            </div>
            <a class="links" href="/pizzas/create">Order a Pizza</a>
        </div>
    </div>
</div>
@endsection