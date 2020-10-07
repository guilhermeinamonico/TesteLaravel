@extends('templates.template')

@section('content')
	<h1 class="text-center">@if(isset($unidades)) Editar @else Cadastrar @endif</h1>

	<div class="col-8 m-auto">

            @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
            @endif

        @if(isset($unidades))
                    <form name="formEdit" id="formEdit" method="post" action='{{url("unidades/$unidades->id_unidades")}}'>
                        @method('PUT')
                @else
                    <form name="formCad" id="formCad" method="post" action="{{url('unidades')}}">
            @endif

            @csrf
            <input class="form-control" type="text" name="nomeApto" id="nomeApto" placeholder="Apartamento: " value="{{$unidades->nomeApto ?? ''}}" required>

            <select class="form-control" name="id_empreendimentos" id="id_empreendimentos" required>
                <option value="{{$unidades->relEmpreendimentos->id_empreendimentos ?? ''}}"> {{$unidades->relEmpreendimentos->nome ?? 'Autor'}} </option>

                @foreach($empreendimentos as $empreendimento)

                    <option value="{{$empreendimento->id_empreendimentos}}">{{$empreendimento->nome}}</option>

                @endforeach

            </select>
            <input class="form-control" type="text" name="metragem" id="metragem" placeholder="Metragem: " value="{{$unidades->metragem ?? ''}}" required>
            <input class="form-control" type="text" name="nomeTorre" id="nomeTorre" placeholder="Torre: " value="{{$unidades->nomeTorre ?? ''}}"  required>
            <input class="form-control" type="text" name="andar" id="andar" placeholder="Andar: " value="{{$unidades->andar ?? ''}}"  required>
            <input class="btn btn-primary" type="submit" value="@if(isset($unidades)) Editar @else Cadastrar @endif">

        </form>

    </div>

@endsection


