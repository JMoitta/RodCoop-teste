{{ csrf_field() }}
<div class="form-group">
    <label for="locality">Localidade</label>
    <input type="text" class="form-control" id="locality" name="locality" value="{{old('locality', $prayingHouse->locality)}}">
</div>