@extends('template.layout')

@section('content')
<div class="card" style="width: 50%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Exibir Fornecedor</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NOME</strong>
                    {{ $supplier->nome }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CPF/CNPJ</strong>
                    {{ $supplier->documento }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>EMAIL</strong>
                    {{ $supplier->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>DATA NASC.</strong>
                    {{ $supplier->dataNasc }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ENDEREÇO</strong>
                    {{ $supplier->endereco }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NÙMERO</strong>
                    {{ $supplier->numero }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection