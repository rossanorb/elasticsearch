@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Clientes</h3>

        <a href="{{ route('clients.create') }}" class="btn btn-success">Novo cliente</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
    </div>

@endsection
