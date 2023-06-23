@extends('template.layout')

@section('content')
<div class="card" style="width: 80%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Fornecedor</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('suppliers.create') }}"> Cadastrar Fornecedor</a>
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
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NOME</th>
                    <th>CPF/CNPJ</th>
                    <th>EMAIL</th>
                    <th>TELEFONE.</th>
                    <th>ENDEREÇO</th>
                    <th>NÚMERO</th>
                    <th width="280px">Ação</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($suppliers as $supplier)            
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->nome }}</td>
                    <td>{{ $supplier->documento }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->dataNasc }}</td>
                    <td>{{ $supplier->endereco }}</td>
                    <td>{{ $supplier->numero }}</td>
                    <td>
                        <form action="{{ route('suppliers.destroy',$supplier->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('suppliers.show',$supplier->id) }}"><i class="fas fa-eye"></i></a>

                            <a class="btn btn-primary" href="{{ route('suppliers.edit',$supplier->id) }}"><i class="fas fa-edit"></i></a>

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