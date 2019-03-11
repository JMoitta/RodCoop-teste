@extends('layouts.layout')

@section('content')
    <h3>Editando - Região Administrativa</h3>
    @include('form._form_errors')
    <form method="POST" action="{{ route('administrative-regions.update', ['administrativeRegion' => $administrativeRegion->id]) }}">
        {{ method_field('PUT')}}
        @include('admin.administrativeRegion._form')
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection