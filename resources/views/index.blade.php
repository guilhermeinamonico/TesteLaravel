@extends('templates.template')

@section('content')











    <div class="text-center mt-3 mb-4">
        <a href="{{url('unidades/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>

    </div>
	<div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Apartamento</th>
                <th scope="col">Metragem</th>
                <th scope="col">Torre</th>
                <th scope="col">Andar</th>
                <th scope="col">Empreendimento</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($unidade as $unidades)
                @php
                    $empreendimento=$unidades->find($unidades->id_unidades)->relEmpreendimentos;
                @endphp
                <tr>
                    <th scope="row">{{$unidades->id_unidades}}</th>
                    <td>{{$unidades->nomeApto}}</td>
                    <td>{{$unidades->metragem}}</td>
                    <td>{{$unidades->nomeTorre}}</td>
                    <td>{{$unidades->andar}}</td>
                    <td>{{$empreendimento->nome}}</td>
                    <td>
                        <a href="{{url("unidades/$unidades->id_unidades")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("unidades/$unidades->id_unidades/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("unidades/$unidades->id_unidades")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>


                    </td>
                </tr>

            @endforeach


            </tbody>
        </table>
        {{$unidade->links()}}
    </div>
@endsection


