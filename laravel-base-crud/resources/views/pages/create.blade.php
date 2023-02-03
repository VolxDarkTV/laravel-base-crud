@extends('layouts/main-layouts')

@section('main')

    <h1>CREATE NEW SAINT</h1>
    <form method="POST" action="{{ route('holy.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="surname">Bird place</label>
        <input type="text" name="surname">
        <br>
        <label for="blessing_date">Blessing date</label>
        <input type="date" name="blessing_date">
        <br>
        <label for="num_miracles">Miracle count</label>
        <input type="number" name="num_miracles">
        <br>
        <input type="submit" value="CREATE NEW SAINT">
    </form>

@endsection