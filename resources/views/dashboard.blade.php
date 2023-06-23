@extends('template.layout')
 
@section('content')
<div class="main-panel mt--5">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-success">
                                6%
                                <i class="fa fa-chevron-up"></i>
                            </div>
                            <div class="h1 m-0">2</div>
                            <div class="text-muted mb-3">Clientes cadastrados</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-danger">
                                -3%
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="h1 m-0">1</div>
                            <div class="text-muted mb-3">Fornecedores cadastrados</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="card">
                        <div class="card-body p-3 text-center">
                            <div class="text-right text-success">
                                9%
                                <i class="fa fa-chevron-up"></i>
                            </div>
                            <div class="h1 m-0">11</div>
                            <div class="text-muted mb-3">Produtos cadastrados</div>
                        </div>
                    </div>
                </div>                
            </div>
                        
        </div>
    </div>
</div>
@endsection