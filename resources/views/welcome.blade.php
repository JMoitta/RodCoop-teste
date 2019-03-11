@extends('layouts.layout')

@section('content')
  <div class="row">
    <form class="form-horizontal">
      <div class="form-group form-group-lg">
        <label class="col-sm-4 control-label" for="regiaoAdministrativa">Região Administrativa</label>
        <div class="col-sm-4">
          <select class="form-control" id="regiaoAdministrativa">

          </select>
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-primary btn-lg">Selecionar</button>
        </div>
      </div>
      <hr>  
      <div class="form-group form-group-lg">
        <label class="col-sm-12 control-label" style="text-align: center">Lista de Rodízio</label>
      </div>
      <div class="form-group form-group-lg">
        <div class="col-sm-6 ">
          <button class="btn btn-primary btn-lg pull-right">Igrejas</button>
        </div>
        <div class="col-sm-6">
          <button class="btn btn-primary btn-lg">Cooperadores</button>
        </div>
      </div>
    </form>
  </div>
@endsection

