@extends('layouts.main')

@section('title', 'Lista de Contatos Alfasoft')

@section('content')

<div style="padding:20px;">
    <h2>Pessoas cadastradas</h2>

    @foreach($pessoas as $pessoa)
        <p><b>Nome:</b> {{$pessoa->name}} || <b>E-mail: </b> {{$pessoa->email}}</p> 
        
    @endforeach
</div>

@endsection