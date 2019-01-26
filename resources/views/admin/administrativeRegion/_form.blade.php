{{ csrf_field() }}
<div class="form-group">
    <label for="description">Descrição</label>
    <input type="text" class="form-control" id="description" name="description" value="{{old('description', $administrativeRegion->description)}}">
</div>