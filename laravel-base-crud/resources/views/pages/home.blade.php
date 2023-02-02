@extends('layouts/main-layouts')

@section('head')
    <title>Home</title>
@endsection

@section('main')
    <ul>
        @foreach ($holies as $holy)
            <li>
                [{{$holy -> id}}] - {{$holy -> name}}
            </li>
        @endforeach
    </ul>
@endsection