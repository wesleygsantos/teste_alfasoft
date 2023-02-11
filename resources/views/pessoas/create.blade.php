@extends('layouts.main')

@section('title', 'Lista de Contatos Alfasoft')

@section('content')



<div id="people-create-container" class="col-md-6 offset-md-3">
    <h1>Novo Cadastro de Pessoas</h1>
    <h2>Cadastre uma nova pessoa</h2>
    <form action="/pessoas" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o Nome da Pessoa">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Digite o E-mail da Pessoa">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Adicionar Pessoa">
    </form>

</div>

@endsection