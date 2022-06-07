@extends('layouts.app')

@section('title', "Editar Usuário {{ $user->name }} " )

@section('container')

<h1>Editar o Usuário {{ $user->name }}</h1>

@if ($errors->any())
<ul class="errors">
    @foreach ($errors->all() as $error )
    <li class="error"> {{ $error }} </li>
    @endforeach
</ul>

@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="Digite Seu Nome" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="Digite Seu Email" value="{{ $user->email }}">
    <input type="password" name="password">

    <button type="submit">Enviar</button>

</form>
@endsection