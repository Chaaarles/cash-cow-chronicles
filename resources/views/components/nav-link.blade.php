@props(['active' => false, 'button' => false])
@php
    $classes = 'border-b-2 hover:border-eggplant-900 border-b-transparent transition duration-200 font-medium text-eggplant-950';
    if ($active) $classes .= ' !border-eggplant-900';
    if ($button) $classes .= ' bg-eggplant-950 hover:bg-eggplant-800 text-white px-3 py-1 rounded-lg border-none';
@endphp

<a {{$attributes(['class' => $classes])}}>{{$slot}}</a>
