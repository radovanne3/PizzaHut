@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <img src="/img/PizzaHut.png" alt="pizzahut-logo">
            <div class="wrapper pizza-details">
                <h1>Order for {{ $pizza->name }}</h1>
                <p> Type - {{ $pizza->type }}</p>
                <p> Base - {{ $pizza->base }}</p>
                <p> Extra Toppings:</p>
                <ul>
                    @foreach($pizza->toppings as $topping)
                        <li>{{$topping}}</li>
                    @endforeach
                </ul>
                <form action="/pizzas/{{$pizza->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Complete Order</button>
                </form>
                <a href="/pizzas" class="back"><-Back to all pizzas-></a>
            </div>

        </div>
    </div>

@endsection
