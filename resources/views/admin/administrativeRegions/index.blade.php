@extends('layouts.layout')

@section('content')
  <h3>Regiões administrativas</h3>
  <br/><br/>
  <a class="btn btn-default" href="{{ route('administrative-regions.create') }}">Nova</a>
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
          <a href="{{ route('administrative-regions.show', ['id'=>$administrativeRegion->id]) }}">Ver</a> |
          <a href="{{ route('administrative-regions.edit', ['id'=>$administrativeRegion->id]) }}">Editar</a> |
          <a href="{{ route('administrative-regions.destroy', ['administrativeRegion' => $administrativeRegion->id]) }}"
              onclick="event.preventDefault();if(confirm('Deseja excluir esse item?')){document.getElementById('form-delete').submit();}">Excluir</a>
        </td>
      </tr>
      <form id="form-delete" style="display: none;" action="{{ route('administrative-regions.destroy', ['administrativeRegion' => $administrativeRegion->id]) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
      </form>
    @endforeach
    </tbody>
  </table>
@endsection