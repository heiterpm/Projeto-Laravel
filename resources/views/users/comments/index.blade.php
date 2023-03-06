@extends('layouts.app')

@section('title',"Comentarios do Usúario {$user->name}")

@section('content')

<div class="d-flex justify-content-center">
    <h1>Comentários do Usúario {{$user->name}}</h1>
</div>

<div class="container">
    <div class="row d-flex justify-content-end">
        <div class="col-sm">
            <a href="{{ route('comments.create', $user->id)}}" class="btn btn-success justify-content-start">Cadastrar +</a>
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
                <th>Conteúdo</th>
                <th>Visivel</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
                <tr>
                        <th scope="row">{{ $comment->id }}</td>
                        <td>{{ $comment->body }}</td>
                        <td>{{ $comment->visible ? 'SIM' : 'NÃO'}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
