@extends('layouts.layout')

@section('content')
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
            <img src="/images/pizza-shop.png" class="justify-center" alt="pizza paradise logo">
            <div class="title m-b-md">
                Pizza Paradise <br />
                Malaysia's Best Pizza Store
            </div>
            <p></p>
            <p class="mssg">{{ session('mssg')}}</p>
            <a href="/pizzalist/create">Order A Pizza Now!</a>
            <p></p>
        </div>
    </div>
@endsection