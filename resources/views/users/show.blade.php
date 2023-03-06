@extends('layouts.app')

@section('title',"Usuario {{$user -> name}}")

@section('content')

<h1>Informações Usuario: {{$user -> name}}</h1>

<Ul>
    <li>{{ $user -> name }}</li>
    <li>{{ $user -> email }}</li>
    <li>{{ $user -> saldo }}</li>
</Ul>

<form action="{{route('users.delete', $user ->id)}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection