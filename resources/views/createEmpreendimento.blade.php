@extends('templates.template')

@section('content')
	<h1 class="text-center">@if(isset($empreendimentos)) Editar @else Cadastrar @endif</h1>

	<div class="col-8 m-auto">

            @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
            @endif

        @if(isset($empreendimentos))
                    <form name="formEdit" id="formEdit" method="post" action='{{url("empreendimentos/$empreendimentos->id_empreendimentos")}}'>
                        @method('PUT')
                @else
                    <form name="formCad" id="formCad" method="post" action="{{url('empreendimentos')}}">
            @endif

            @csrf
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome: " value="{{$empreendimentos->nome ?? ''}}" required>
                        <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade: " value="{{$empreendimentos->cidade ?? ''}}"  required>
                        <input class="form-control" type="text" name="valorMquadrado" id="valorMquadrado" placeholder="Valor do Metro Quadrado: " value="{{$empreendimentos->valorMquadrado ?? ''}}"  required>
                        <input class="form-control" type="text" name="dataEntrega" id="dataEntrega" placeholder="Data da Entrega" value="{{$empreendimentos->dataEntrega ?? ''}}">
                        <input class="btn btn-primary" type="submit" value="@if(isset($empreendimentos)) Editar @else Cadastrar @endif">

        </form>

    </div>

@endsection


