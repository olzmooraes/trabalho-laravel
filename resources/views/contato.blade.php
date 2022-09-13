@extends('master.layout')

@section('content')

<form action=" {{route('contato')}}" method="POST">

  {{ csrf_field() }}

    <div class="container py-2">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu Email">
        </div>
        <div class="mb-3">
            <label for="Assunto" class="form-label">Assunto</label>
            <input name="assunto" type="text" class="form-control" id="Assunto" placeholder="Digite o Assunto">
        </div>
        <div class="mb-3">
            <label for="textarea" class="form-label">Comentário</label>
        <textarea name="textarea" class="form-control" id="textarea" placeholder="Digite seu Texto" rows="5"></textarea>
        </div>
        <input class="btn btn-primary " type="submit" value="Submit">
    </div>
</form>

@if(count($errors)>0)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Preencha os dados corretamente</strong> 
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error}}</li>
    @endforeach
  </ul>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Obrigado!</strong> {{ $message }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>OOPPS!</strong> {{ $message }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@endsection