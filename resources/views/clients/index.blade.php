@extends('template.layout')

@section('content')
<div class="card" style="width: 80%;">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Cliente</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('clients.create') }}"> Cadastrar Cliente</a>
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
                    <th>DATA NASC.</th>
                    <th>ENDEREÇO</th>
                    <th>NÚMERO</th>
                    <th width="280px">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->nome }}</td>
                    <td>{{ $client->documento }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->dataNasc }}</td>
                    <td>{{ $client->endereco }}</td>
                    <td>{{ $client->numero }}</td>
                    <td>
                        <form action="{{ route('clients.destroy',$client->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('clients.show',$client->id) }}"><i class="fas fa-eye"></i></a>

                            <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}"><i class="fas fa-edit"></i></a>

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