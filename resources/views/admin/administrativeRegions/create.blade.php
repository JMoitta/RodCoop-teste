@extends('layouts.layout')

@section('content')
    <h3>Nova - Região Administrativa</h3>
    @include('form._form_errors')
    <form method="POST" action="{{ route('administrative-regions.store') }}">
        @include('admin.administrativeRegion._form')
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
@endsection