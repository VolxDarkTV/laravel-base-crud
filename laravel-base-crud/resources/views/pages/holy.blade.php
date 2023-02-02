@extends('layouts/main-layouts')

@section('main')
    
    <section class="container">
        <div class="d-flex flex-column align-items-center">
            <h1>Holy</h1> 
            <div class="d-flex flex-column">
                <span>Name: {{ $holy -> name }}</span>
                <span>Last Name: {{ $holy -> surname }}</span>
                <span>Blessing Date: {{ $holy -> blessing_date }}</span>
                <span>N° Miracles: {{ $holy -> num_miracles }}</span>
            </div>
        </div>
    </section>

@endsection