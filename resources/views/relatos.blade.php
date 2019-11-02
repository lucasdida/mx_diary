<link rel="stylesheet" href="{{ asset('css/mxdiary.css') }}">

@extends('adminlte::page')

@section('title', 'MX Diary')

@section('content')


<div class="row">
    <div class="card border">
        <div class="card-body">
            <legend class="legend-filiado">
                <h3 class="titulo_formulario">Listagem de Relatos</h3>
            </legend>

            @if(count($relatos) > 0)
                <table class="table table-ordered table-hover" style="margin-left:5%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($relatos as $relato)
                            <tr>
                                <td>{{$relato->nome}}</td>
                                <td>{{$relato->sobrenome}}</td>
                                <td>{{$relato->telefone}}</td>
                                <td>
                                    <a href="/relatos/editar/{{$relato->id}}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="/relatos/apagar/{{$relato->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach                
                    </tbody>
                </table>
            @endif        
        </div>                        
    </div>
</div> 


@stop
