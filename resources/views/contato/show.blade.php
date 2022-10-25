@extends('layout.app')
@section('title','Contato - {{$contato->Nome}}')
@section('content')
       <h1>Contato - {{$contato->Nome}}</h1>
<ul>

       
              <li>ID: {{$contato->id}}</li>
              <li>E-mail: <a href="mailto:{{$contato->email}}"></li>
              <li>{{$contato->email}}</a></li>
              <li>Telefone: {{$contato->telefone}}</li>
              <li>Cidade: {{$contato->Cidade}}</li>
              <li>Estado: {{$contato->Estado}}</li>
</ul>

              {{Form::open(['route' => ['contatos.destroy',$contato->id],'method'=> 'DELETE'])}}
              <a href="{{url('contatos/'.$contato->id.'/edit')}}" class="btn btn-sucess">Alterar</a>
              {{Form::submit('Excluir',['class'=>'btn btn-danger','onclick'=>'return confirm("Confirma exclusão?")'])}}
              <a href="{{url('contatos/')}}" class="btn btn-secundary">Voltar</a>
              {{Form::close()}}
@endsection