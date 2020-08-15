@extends('layouts.app')
@section('content')
<div class="container full-height">
    <div class="flex-center">
        <div class="title m-b-md">
            Pizza Orders
        </div>
    </div>
    @foreach ($pizzas as $pizza)
    <div class="pizza-item row justify-content-center">
        <div class="list-group col-sm-4">
            <a href="/pizzas/{{$pizza->id}}" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="/img/pizza.png" alt="pizza-icon" srcset="">
                    </div>

                    <div class="col-sm-5 center">
                        <p class="mb-1">{{$pizza->name}}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection