@extends('template.layout')

@section('content')
<div class="card" style="width: 50%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Exibir Cliente</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('clients.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NOME</strong>
                    {{ $client->nome }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CPF/CNPJ</strong>
                    {{ $client->documento }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>EMAIL</strong>
                    {{ $client->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>DATA NASC.</strong>
                    {{ $client->dataNasc }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ENDEREÇO</strong>
                    {{ $client->endereco }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NÙMERO</strong>
                    {{ $client->numero }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection