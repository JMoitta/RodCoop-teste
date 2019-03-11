@extends('layouts.layout')

@section('content')
    <h3>Editando - Cooperador</h3>
    @include('form._form_errors')
    <form method="POST" action="{{ route('cooperators.update', ['cooperator' => $cooperator->id]) }}">
        {{ method_field('PUT')}}
        @include('admin.cooperators._form')
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection