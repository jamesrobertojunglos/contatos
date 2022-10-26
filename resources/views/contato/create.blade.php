@extends('layout.app')
@section('title','Criar novo Contato')
@section('content')
    <h1>Criar novo Contato</h1>
    <br />
    {{Form::open(['route' => 'contatos.store', 'method' => 'POST'])}}
        {{Form::label('Nome', 'Nome')}}
        {{Form::text('Nome','',['class'=>'form-control','required','placeholder'=>'Nome completo'])}}
        {{Form::label('email', 'e-mail')}}
        {{Form::text('email','',['class'=>'form-control','required','placeholder'=>'e-mail','pattern'=>'[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?'])}}
        {{Form::label('telefone', 'Telefone')}}
        {{Form::text('telefone','',['class'=>'form-control','required','placeholder'=>'(99) 99999-9999','pattern'=>'(\([0-9]{2}\))\s([9]{1})?([0-9]{4,5})-([0-9]{4})','title'=>'Número de telefone precisa ser no formato (99) 9999-9999'])}}
        {{Form::label('Cidade', 'Cidade')}}
        {{Form::text('Cidade','',['class'=>'form-control','required','placeholder'=>'Nome da cidade'])}}
        {{Form::label('Estado', 'Estado')}}
        {{Form::text('Estado','',['class'=>'form-control','required','placeholder'=>'Nome do estado'])}}
        <br />
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)', 'class'=>'btn btn-secondary'])!!}
    {{Form::close()}}
@endsection