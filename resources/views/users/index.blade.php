@extends('layouts.app')

@section('title','Listagem Usuarios')

@section('content')

<h1>Listagem Usuarios</h1>

<h3>
    <a href="{{ route('users.create')}}">Cadastrar +</a>
</h3>

<form action="{{ route('users.index') }}" method="GET">
    <input type="text" name="search" id="" placeholder="Pesquisar">
    <button type="submit">Pesquisar</button>
</form>

<ul>
    @foreach($users as $user)
        <li>
            {{ $user->name }}   -
            {{ $user->email }}  -
            <a href="{{ route('users.show',$user -> id )}}">Detalhes</a>
            <a href="{{ route('users.edit',$user -> id )}}">Editar</a>
        </li>
    @endforeach
</ul>

@endsection
