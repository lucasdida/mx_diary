<link rel="stylesheet" href="{{ asset('css/mxdiary.css') }}">

@extends('adminlte::page')

@section('title', 'MX Diary')

@section('content')
    


<form action="/relatos/{{$relato->id}}" method="POST" role="form" id="editar_relato" name="editar_relato">
    
    {{ csrf_field() }}
    <legend class="legend-filiado">
            <h3 class="titulo_formulario">Editar Relato</h3>
    </legend>

    <div class="form-row" style="margin-left: 1%">
        <div class="form-group col-md-12">
            <div class="form-group col-md-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{$relato->nome}}">
            </div>
            <div class="form-group col-md-3">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" value="{{$relato->sobrenome}}">
            </div>
            <div class="form-group col-md-3">
                <label for="dt_nascimento" class="col-2 col-form-label">Data de Nascimento</label>
                <div class="col-10">
                    <input class="form-control" type="date" id="dt_nascimento" name="dt_nascimento" value="{{$relato->dt_nascimento}}">
                </div>
            </div>
            <div class="form-group col-md-2">
                <label for="telefone" class="control-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone"value="{{$relato->telefone}}">
            </div>
        </div>

        <div class="form-group col-md-12">
            <div class="form-group col-md-2">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Cep" value="{{$relato->cep}}">
            </div>
            <div class="form-group col-md-6">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" value="{{$relato->logradouro}}">
            </div>
            <div class="form-group col-md-1">
                <label for="nr_logradouro">Número</label>
                <input type="text" class="form-control" id="nr_logradouro" name="nr_logradouro" value="{{$relato->nr_logradouro}}">
            </div>
        </div>

        <div class="form-group col-md-12">
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{$relato->bairro}}">
            </div>
            <div class="form-group col-md-3">
                <label for="localidade">Cidade</label>
                <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Cidade" value="{{$relato->localidade}}">
            </div>
            <div class="form-group col-md-2">
                <label for="uf">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" placeholder="UF" value="{{$relato->uf}}">
            </div>
        </div>

        <div class="form-group col-md-11" style="margin-left: 1%">
            <label for="biografia">Biografia</label>
            <textarea class="form-control" style="resize: none" id="biografia" name="biografia" rows="7">{{$relato->biografia}}</textarea>
        </div>

                                   
        <div class="form-group col-md-2 button-filiado-next">
            <button type="submit" class="btn btn-success next-step">Salvar</button>
        </div>
    </div>

</form>


@stop

<script src="{{ asset('js/mxdiary.js') }}"></script>

