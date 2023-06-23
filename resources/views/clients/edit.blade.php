@extends('template.layout')

@section('content')
<div class="card" style="width: 50%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Cliente</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('clients.index') }}"> Voltar</a>
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

        <form action="{{ route('clients.update',$client->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NOME</strong>
                        <input type="text" name="nome" value="{{ $client->nome }}" class="form-control" placeholder="Nome">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF/CNPJ</strong>
                        <input class="form-control" name="documento" placeholder="CPF/CNPJ" value="{{ $client->documento  }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>EMAIL</strong>
                        <input class="form-control" name="email" placeholder="Email" value="{{ $client->email }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>DATA NASC.</strong>
                        <input class="form-control" name="dataNasc" placeholder="Data Nascimento" value="{{ $client->dataNasc }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ENDEREÇO</strong>
                        <input class="form-control" name="endereco" placeholder="endereco" value="{{ $client->endereco }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NÚMERO</strong>
                        <input class="form-control" name="numero" placeholder="Número" value="{{ $client->numero}}">
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