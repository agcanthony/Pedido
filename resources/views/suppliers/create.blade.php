@extends('template.layout')

@section('content')
<div class="card" style="width: 50%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Adicionar Fornecedor</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Preencha todos os campos corretamente.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NOME</strong>
                        <input type="text" name="nome" class="form-control" placeholder="Nome">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF/CNPJ</strong>
                        <input type="text" name="documento" class="form-control" placeholder="cpf/cnpj">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>EMAIL</strong>
                        <input class="form-control" style="height:150px" name="email" placeholder="Email"></input>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>TELEFONE</strong>
                        <input class="form-control" style="height:150px" name="telefone" placeholder="Telefone"></input>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ENDEREÇO</strong>
                        <input class="form-control" style="height:150px" name="endereco" placeholder="Endereço"></input>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NUMERO</strong>
                        <input class="form-control" style="height:150px" name="numero" placeholder="numero"></input>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection