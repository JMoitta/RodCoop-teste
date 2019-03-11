{{ csrf_field() }}
<div class="form-group">
  <label for="regiaoAdministrativa">Região Administrativa</label>
  <select class="form-control" name="administrative_region_id" id="administrative_region_id">
    <option value="">Selecione uma Região Administrativa</option>
    @foreach ($administrativeRegionsList as $administrativeRegion)
      @if (old('administrative_region_id', $cooperator->administrative_region_id) == $administrativeRegion->id)
        <option value="{{ $administrativeRegion->id }}" selected>{{ $administrativeRegion->description }}</option>
      @else
        <option value="{{ $administrativeRegion->id }}">{{ $administrativeRegion->description }}</option>
      @endif
    @endforeach
  </select>
</div>
<div class="form-group">
  <label for="name">Nome</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name', $cooperator->name)}}">
</div>