@extends('template.layout')

@section('content')
<div class="card" style="width: 80%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Produtos</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Cadastrar Produto</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>
    <div class="card-body">
        <table id="example" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>COD. BARRAS</th>
                    <th>DESCRIÇÃO</th>
                    <th>VALOR</th>
                    <th width="280px">Ação</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)                
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->codBarras }}</td>
                        <td>{{ $product->descricao }}</td>
                        <td>{{ $product->valor }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fas fa-eye"></i></a>

                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"></i></a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>            
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection