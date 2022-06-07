@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('container')
<h1 class="text-2xl font-bold mb-5 ">Listagem de Usuários
    <a href="{{ route('users.create') }}">

<i class="fa-solid fa-user-plus"></i>
    </a>

</h1>

<form action="{{ route('users.index') }}" method="GET">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form>
<ul>
    @foreach ( $users as $user )
    <li>
        {{ $user->name }} -
        {{ $user->email }}
<a href="{{ route('users.show', $user->id) }}">
    <i class="fa-solid fa-calendar-week"></i>
</a>
<a href="{{ route('users.edit',  $user->id) }}">
    <i class="fa-solid fa-user-pen"></i>
</a>
    </li>
    @endforeach
</ul>

@endsection
