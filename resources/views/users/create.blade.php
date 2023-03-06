@extends('layouts.app')

@section('title','Criar User')

@section('content')

<h1>Novo Usuario</h1>

@include('includes.validation-form')

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    @include('users._partials.form')
</form>
<a href="{{ route('users.index') }}">Cancelar</a>

@endsection