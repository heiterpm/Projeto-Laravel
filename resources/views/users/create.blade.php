@extends('layouts.app')

@section('title','Criar User')

@section('content')

<h1>Novo Usuario</h1>

@include('includes.validation-form.blade')

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome:" value="{{old('name')}}">
    @include('users._partials.form')
</form>
<a href="{{ route('users.index') }}">Cancelar</a>

@endsection