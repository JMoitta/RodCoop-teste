<h1>For IF</h1>

@if( $value > 100)
    <p>Valor maior que 100</p>
@else
    <p>Valor menor que 100</p>
@endif

@for ($i = 0; $i < $value; $i++)
    - {{ $i}}
@endfor

@php
    $i = 0;
@endphp
@while ($i < $value)
    - {{ $i + 1}}
    @php
        $i++;
    @endphp
@endwhile

@foreach ($myArray as $value)
    
@endforeach