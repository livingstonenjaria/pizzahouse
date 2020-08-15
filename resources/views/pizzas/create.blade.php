@extends('layouts.app')
@section('content')
<div class="container full-height">

    {{-- <form action="/pizzas" method="post">
        @csrf
        <div class="title m-b-md">
            Create a New Pizza
        </div>
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="chicken bbq">Chicken BBQ</option>
            <option value="pepperoni">Pepperoni</option>
            <option value="all the meats">All the Meats</option>
        </select>
        <label for="base">Choose Pizza Base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">Create a New Pizza</div>

                <div class="card-body">
                    <form action="/pizzas" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        </div>

                        <div class="form-group">
                            <label for="type">Choose Pizza Type:</label>
                            <select name="type" id="type" class="form-control">
                                <option value="margarita">Margarita</option>
                                <option value="hawaiian">Hawaiian</option>
                                <option value="chicken bbq">Chicken BBQ</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="all the meats">All the Meats</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="base">Choose Pizza Base:</label>
                            <select name="base" id="base" class="form-control">
                                <option value="cheesy crust">Cheesy Crust</option>
                                <option value="garlic crust">Garlic Crust</option>
                                <option value="thin & crispy">Thin & Crispy</option>
                                <option value="thick">Thick</option>
                            </select>
                        </div>
                        <fieldset class="form-group">

                            <label for="toppings">Extra Toppings:</label>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="mushroooms"
                                        name="toppings[]" value="mushrooms">
                                    <label class="custom-control-label" for="mushroooms">Mushrooms</label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="peppers" name="toppings[]"
                                        value="peppers">
                                    <label class="custom-control-label" for="peppers">Peppers</label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="garlic" name="toppings[]"
                                        value="garlic">
                                    <label class="custom-control-label" for="garlic">Garlic</label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="olives" name="toppings[]"
                                        value="olives">
                                    <label class="custom-control-label" for="olives">Olives</label>
                                </div>
                            </div>

                        </fieldset>
                        <button type="submit" class="btn btn-success">Order Pizza</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection