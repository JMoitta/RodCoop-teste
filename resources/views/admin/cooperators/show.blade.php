@extends('layouts.layout')

@section('content')
  <h3>Ver cooperador</h3>
  <a class="btn btn-primary" href="{{ route('cooperators.edit', ['cooperator' => $cooperator->id]) }}">Editar</a>
  <a class="btn btn-danger" href="{{ route('cooperators.destroy', ['cooperator' => $cooperator->id]) }}"
    onclick="event.preventDefault();if(confirm('Deseja excluir esse item?')){document.getElementById('form-delete').submit();}">Excluir</a>
  <form id="form-delete" style="display: none;" action="{{ route('cooperators.destroy', ['cooperator' => $cooperator->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE')}}
  </form>
  <br><br>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th scope="row">ID</th>
        <td>{{ $cooperator->id }}</td>
      </tr>
      <tr>
        <th scope="row">Nome</th>
        <td>{{ $cooperator->name }}</td>
      </tr>
    </tbody>
  </table>
@endsection