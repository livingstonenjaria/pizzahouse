<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // * Get all pizzas
    public function index()
    {
        $pizzas = Pizza::all();
        $name = request('name');
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => $name,
        ]);
    }
    // * Get single pizza
    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }
    // * Create pizza
    public function create()
    {
        return view('pizzas.create');
    }
    // * Save pizza to db
    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();
        return redirect('/')->with('msg', 'Your order has been recieved, Thank you for choosing us');
    }
    // * Complete order/ remove pizza
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}