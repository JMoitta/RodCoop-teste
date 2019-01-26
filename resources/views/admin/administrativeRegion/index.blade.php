@extends('layouts.layout')

@section('content')
  <h3>Lista das regiões administrativas</h3>
  <br/><br/>
  <a class="btn btn-default" href="{{ route('administrative-regions.create') }}">Criar novo</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($administrativeRegions as $administrativeRegion)
      <tr>
        <td>{{ $administrativeRegion->id }}</td>
        <td>{{ $administrativeRegion->description }}</td>
        <td>
          <a href="{{ route('administrative-regions.edit', ['id'=>$administrativeRegion->id]) }}">Editar</a> |
          <a href="{{ route('administrative-regions.show', ['id'=>$administrativeRegion->id]) }}">Ver</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection