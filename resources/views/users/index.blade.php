@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('container')
<h1 class="text-2xl font-bold mb-5 ">Listagem de Usuários
    <a href="{{ route('users.create') }}">

        <i class="fa-solid fa-user-plus cursor-pointer"></i>
    </a>
</h1>

<ul>
    @foreach ( $users as $user )
    <li>
        {{ $user->name }} -
        {{ $user->email }}
        <a href="{{ route('users.show', $user->id) }}">Ver Detalhes</a>
    </li>
    @endforeach
</ul>

@endsection
