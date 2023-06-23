@extends('template.layout')

@section('content')
<div class="card" style="width: 50%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Exibir Produto</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>COD. BARRAS</strong>
                    {{ $product->codBarras }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>DESCRIÇÃO</strong>
                    {{ $product->descricao }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>VALOR</strong>
                    {{ $product->valor }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection