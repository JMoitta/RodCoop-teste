@extends('layouts.layout')

@section('content')
    <h3>Novo cliente</h3>
    @include('form._form_errors')
    <form method="POST" action="{{ route('cooperators.store') }}">
        @include('admin.cooperators._form')
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
@endsection