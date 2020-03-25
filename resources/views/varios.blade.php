@foreach ($info as $infoitem)

@if ($infoitem->nombre=='Aaron')
<p> {{$infoitem->nombre}} - {{$infoitem->descripcion}} Este usuario es Aaron</p>
@else
<p> {{$infoitem->nombre}} - {{$infoitem->descripcion}} </p>
@endif

@empty($infoitem->descripcion)
    <p>La descripcion esta en blanco</p>
@endempty
@endforeach