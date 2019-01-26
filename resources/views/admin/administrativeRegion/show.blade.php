@extends('layouts.layout')

@section('content')
  <h3>Ver região administrativa</h3>
  <a class="btn btn-primary" href="{{ route('administrative-regions.edit', ['administrativeRegion' => $administrativeRegion->id]) }}">Editar</a>
  <a class="btn btn-danger" href="{{ route('administrative-regions.destroy', ['administrativeRegion' => $administrativeRegion->id]) }}"
    onclick="event.preventDefault();if(confirm('Deseja excluir esse item?')){document.getElementById('form-delete').submit();}">Excluir</a>
  <form id="form-delete" style="display: none;" action="{{ route('administrative-regions.destroy', ['administrativeRegion' => $administrativeRegion->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE')}}
  </form>
  <br><br>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th scope="row">ID</th>
        <td>{{ $administrativeRegion->id }}</td>
      </tr>
      <tr>
        <th scope="row">Descrição</th>
        <td>{{ $administrativeRegion->description }}</td>
      </tr>
    </tbody>
  </table>
@endsection