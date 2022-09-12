@extends('master.layout'); 

@section('content')

<h1 CLASS="d-flex justify-content-center mt-5">SITE VOLTADO PARA APREENDER A USAR LARAVEL</h1>
    @if((date('H') >= 0 && date('H') <= 12))
    <p class="d-flex justify-content-center">Bom Dia!</p>
    @elseif((date('H') >= 13 && date('H') <= 18))
    <p class="d-flex justify-content-center">Boa Tarde!</p>
    @else
    <p class="d-flex justify-content-center">Boa Noite! </p>
    @endif

<div class="container">
    <div class="row">
        <p class="col-md-6">
        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
        </p>
        <p class="col-md-6">
        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.
        </p>
    </div>
</div>
@endsection

