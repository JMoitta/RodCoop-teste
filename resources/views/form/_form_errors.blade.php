@if ($errors->any())
<div class="alert alert-danger">
@foreach ($errors->all() as $erro)
    <li>{{ $erro }}</li>
@endforeach
</div>
@endif