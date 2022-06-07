@extends('layouts.app')

@section('title', 'Pagina do Usuario { $user->name }' )

@section('container')

<h1>Página do usuário {{ $user->name }}</h1>

<ul>
    <li> {{ $user->name }} </li>
    <li> {{ $user->email }} </li>

</ul>

@endsection
