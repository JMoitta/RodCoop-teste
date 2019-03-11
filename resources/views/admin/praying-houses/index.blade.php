@extends('layouts.layout')

@section('content')
  <h3>Igrejas</h3>
  <br/><br/>
  <a class="btn btn-default" href="{{ route('praying-houses.create') }}">Nova</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Localidade</th>
        <th>Cooperador de oficio</th>
        <th>Sabádo</th>
        <th>Domingo</th>
        <th>Endereço</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($prayingHouseList as $prayingHouse)
      <tr>
        <td>{{ $prayingHouse->id }}</td>
        <td>{{ '$prayingHouse->cooperator_craft_id' }}</td>
        <td>{{ $prayingHouse->saturday ? $prayingHouse->saturdayHours : '-' }}</td>
        <td>{{ $prayingHouse->sunday ? $prayingHouse->sundayHours : '-' }}</td>
        <td>{{ $prayingHouse->address }}</td>
        <td>
          <a href="{{ route('praying-houses.show', ['id'=>$prayingHouse->id]) }}">Ver</a> |
          <a href="{{ route('praying-houses.edit', ['id'=>$prayingHouse->id]) }}">Editar</a> |
          <a href="{{ route('praying-houses.destroy', ['prayingHouse' => $prayingHouse->id]) }}"
              onclick="event.preventDefault();if(confirm('Deseja excluir esse item?')){document.getElementById('form-delete').submit();}">Excluir</a>
        </td>
      </tr>
      <form id="form-delete" style="display: none;" action="{{ route('praying-houses.destroy', ['prayingHouse' => $prayingHouse->id]) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE')}}
      </form>
    @endforeach
    </tbody>
  </table>
@endsection