@extends('templates.template')

@section('content')
	<h1 class="text-center">Visualizar</h1>

	<div class="col-8 m-auto">
        @php
            $empreendimento=$unidades->find($unidades->id_unidades)->relEmpreendimentos;
        @endphp
        Apartamento: {{$unidades->nomeApto}} <br>
        Metragem: {{$unidades->metragem}} <br>
        Torre: {{$unidades->nomeTorre}} <br>
        Andar: {{$unidades->andar}} <br>
        Empreendimento: {{$empreendimento->nome}}<br>
        Valor do metro2: R${{$empreendimento->valorMquadrado}}<br>
        Cidade: {{$empreendimento->cidade}}<br>
        Data da Entrega: {{$empreendimento->dataEntrega}}


    </div>
@endsection


