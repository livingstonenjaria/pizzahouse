@extends('layouts.app')
@section('content')
<div class="pizza-details container full-height">
    <div class="row flex-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center">
                    Order Details
                </div>

                <div class="card-body">
                    <div class="flex-left">
                        <div class="title m-b-md">
                            Order for {{$pizza->name}}
                        </div>
                    </div>
                    <label for="type">Type:</label>
                    <p class="type">{{$pizza->type}}</p>
                    <label for="base">Base:</label>
                    <p class="base">{{$pizza->base}}</p>
                    <label for="toppings">Extra Toppings:</label>
                    <ul class="list-group">
                        @foreach ($pizza->toppings as $topping)
                        <li class="list-group-item">{{$topping}}</li>
                        @endforeach
                    </ul>
                    <form action="/pizzas/{{$pizza->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn button-success">Complete Order</button>
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                    <a href="/pizzas">Back to all pizzas</a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection