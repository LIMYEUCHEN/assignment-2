@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create A New Pizza</h1>
    <form action="/pizzalist" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <label for="type">Choose Pizza Type: </label>
        <select name="type" id="type">
            <option value="Hawaiian Chicken">Hawaiian Chicken</optipn>
            <option value="Tuna Temptation">Tuna Temptation</option>
            <option value="Aloha Chicken">Aloha Chicken</option>
        </select>

        <label for="base">Choose Base Type:</label>
        <select name="base" id="base">
            <option value="Cheesy Crust">Cheesy Crust</optipn>
            <option value="Thin Crust">Thin Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
        </select>
        <fieldset>
            <label">Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="cheese">Cheese<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza !">
    </form>
</div>
@endsection