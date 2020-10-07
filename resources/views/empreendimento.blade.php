@extends('templates.template')

@section('content')
	<h1 class="text-center">CRUD</h1>



    <div class="text-center mt-3 mb-4">
        <a href="{{url('empreendimentos/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>

    </div>
	<div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cidade</th>
                <th scope="col">Valor do Metro Quadrado</th>
                <th scope="col">Data da Entrega</th>

                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($empreendimento as $empreendimentos)

                <tr>
                    <th scope="row">{{$empreendimentos->id_empreendimentos}}</th>
                    <td>{{$empreendimentos->nome}}</td>
                    <td>{{$empreendimentos->cidade}}</td>
                    <td>{{$empreendimentos->valorMquadrado}}</td>
                    <td>{{$empreendimentos->dataEntrega}}</td>

                    <td>

                        <a href="{{url("empreendimentos/$empreendimentos->id_empreendimentos/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("empreendimentos/$empreendimentos->id_empreendimentos")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>


                    </td>
                </tr>

            @endforeach


            </tbody>
        </table>
        {{$empreendimento->links()}}
    </div>
@endsection


