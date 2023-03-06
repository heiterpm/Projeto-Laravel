@extends('layouts.app')

@section('title','Listagem Usuarios')

@section('content')

<div class="d-flex justify-content-center">
    <h1>Listagem Usuarios</h1>
</div>

<div class="container">
    <div class="row d-flex justify-content-end">
        <div class="col-sm">
            <a href="{{ route('users.create')}}" class="btn btn-success justify-content-start">Cadastrar +</a>
        </div>
        <div class="col-sm">
        <form action="{{ route('users.index') }}" method="GET"> 
            <div class="input-group mb-3">
                <input type="text" name="search" id="" placeholder="Pesquisar" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                        <th scope="row">{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('users.show',$user -> id )}}" class="btn btn-xs btn-info pull-right d-flex align-items-center mx-3 ">Detalhes</a>
                            <a href="{{ route('comments.index',$user -> id )}}" class="btn btn-primary pull-right mx-3 ">Comentarios</a>
                            <a href="{{ route('users.edit',$user -> id )}}" class="btn btn-secondary pull-right mx-3 ">Editar</a></td>
                        </div>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
