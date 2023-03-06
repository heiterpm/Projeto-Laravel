@extends('layouts.app')

@section('title',"Novo comentário para o Usúario {$user->name}")

@section('content')

<h1>Novo Comentario</h1>

@include('includes.validation-form')

<form action="{{ route('comments.store', $user->id) }}" method="POST">
    @csrf
    @include('users.comments._partials.form')
</form>
<a href="{{ route('comments.index', $user->id) }}">Cancelar</a>

@endsection