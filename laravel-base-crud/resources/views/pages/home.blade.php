@extends('layouts/main-layouts')

@section('head')
    <title>Home</title>
@endsection

@section('main')

    <a href="{{ route('holy.create') }}">CREATE NEW SAINT</a>

    <ul>
        @foreach ($holies as $holy)
            <li class="d-flex align-items-center">
                <a class="col-1" href="{{ route('holy.show', ['id' => $holy -> id]) }}">
                    [{{$holy -> id}}] - {{$holy -> name}}
                </a>

                <a class="card py-1 px-2" href="{{ route('holy.destroy', ['id' => $holy -> id]) }}">X</a>
            </li>
        @endforeach
    </ul>
@endsection