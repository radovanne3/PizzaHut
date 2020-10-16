@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                PizzaHut's Pizza List
            </div>

            @foreach($pizzas as $pizza)
                <div>
                   {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                </div>
            @endforeach
{{--            @if($pizza['price'] > 10)--}}
{{--                <p>This pizza is expensive.</p>--}}
{{--            @elseif($pizza['price'] < 5)--}}
{{--                <p>This pizza is cheap.</p>--}}
{{--            @else--}}
{{--                <p>This pizza is priced normally.</p>--}}
{{--            @endif--}}

        </div>
    </div>
@endsection
