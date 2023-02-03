@extends('layouts/main-layouts')

@section('head')
    <title>Home</title>
@endsection

@section('main')
    <ul>
        @foreach ($holies as $holy)
            <li>
                <a href="{{ route('holy/show', ['id' => $holy -> id]) }}">
                    [{{$holy -> id}}] - {{$holy -> name}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection