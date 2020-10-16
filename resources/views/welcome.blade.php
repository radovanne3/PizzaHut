@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Welcome to
            </div>
            <img src="/img/PizzaHut.png" alt="pizzahut-logo">
            <div class="title m-b-md">

                The World's Best Pizzas

            </div>
                <p class="mssg">{{session('mssg')}}</p>
            <div class="links">
                <a href="/pizzas/create">Create Order</a>
            </div>
        </div>
    </div>
@endsection
