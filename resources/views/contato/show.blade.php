@extends('layout.app')
@section('title','Contato - {{$contato->Nome}}')
@section('content')
       <h1>Contato - {{$contato->Nome}}</h1>
       <ul>
        <li>ID: {{$contato->id}}</li>
        <li>E-mail: <a href="mailto:{{$contato->email}}">
        {{$contato->email}}</a></li>
        <li>Telefone: {{$contato->telefone}}</li>
        <li>Cidade: {{$contato->Cidade}}</li>
        <li>Estado: {{$contato->Estado}}</li>
       </ul>
       <a href="{{url('contatos')}}">Voltar</a>
       @endsection