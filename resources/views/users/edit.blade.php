@extends('layouts.app')

@section('title',"Editar Usuario {{$user -> name}}")

@section('content')

<h1>Editar Usuario {{$user -> name}}</h1>

@include('includes.validation-form')

<form action="{{ route('users.update', $user -> id) }}" method="POST">
    @method('PUT')
    @include('users._partials.form')
</form>
<a href="{{ route('users.index') }}">Cancelar</a>

@endsection