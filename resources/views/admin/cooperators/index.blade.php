@extends('layouts.layout')

@section('content')
  <h3>Lista dos cooperadores</h3>
  <br/><br/>
  <a class="btn btn-default" href="{{ route('cooperators.create') }}">Criar novo</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($cooperators as $cooperator)
      <tr>
        <td>{{ $cooperator->id }}</td>
        <td>{{ $cooperator->name }}</td>
        <td>
          <a href="{{ route('cooperators.edit', ['id'=>$cooperator->id]) }}">Editar</a> |
          <a href="{{ route('cooperators.show', ['id'=>$cooperator->id]) }}">Ver</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection