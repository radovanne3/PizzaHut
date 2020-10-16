@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="wrapper create-pizza">
            <h1>Create a new Pizza</h1>
            <form action="/pizzas" method="POST">
                @csrf
                <label for="name">Your name:</label>
                <input type="text" id="name" name="name">
                <br>
                <label for="type">Choose pizza type:</label>
                <select name="type" id="type">
                    <option value="Margarita">Margarita</option>
                    <option value="Neapolitan">Neapolitan</option>
                    <option value="Detroit Pizza">Detroit Pizza</option>
                    <option value="Chicago Pizza">Chicago Pizza</option>
                    <option value="Vegetarian">Vegetarian</option>
                    <option value="PizzaHut's Bomb">PizzaHut's Bomb</option>
                    <option value="Volcano">Volcano</option>
                </select>
                <br>
                <label for="type">Choose pizza base:</label>
                <select name="base" id="base">
                    <option value="Cheesy Crust">Cheesy Crust</option>
                    <option value="Garlic Crust">Garlic Crust</option>
                    <option value="Traditional Crust">Traditional Crust</option>
                    <option value="Crispy Crust">Crispy Crust</option>
                    <option value="Vegetarian Crust">Vegetarian Crust</option>
                    <option value="Double Crispy Crust">Double Crispy Crust</option>
                    <option value="Double Fluffy Crust">Double Fluffy Crust</option>
                </select>
                <br>
                <fieldset>
                    <label>Extra toppings:</label> <br>
                    <input type="checkbox" name="toppings[]" value="Mayonnaise">Mayonnaise <br>
                    <input type="checkbox" name="toppings[]" value="Beef Sauce">Beef Sauce <br>
                    <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms <br>
                    <input type="checkbox" name="toppings[]" value="Ketchup">Ketchup <br>
                    <input type="checkbox" name="toppings[]" value="Chili">Chili <br>
                    <input type="checkbox" name="toppings[]" value="Cheese">Cheese <br>
                    <input type="checkbox" name="toppings[]" value="PizzaHut's Hardcore Spread">PizzaHut's Hardcore Spread <br>
                </fieldset>
                <br>
                <input type="submit" value="Order Pizza">
            </form>
        </div>

    </div>
@endsection
