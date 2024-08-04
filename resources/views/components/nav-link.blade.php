@props(['active' => false, 'button' => false])
@php
    $classes = 'hover:underline font-medium text-eggplant-950';
    if ($active) $classes .= ' underline';
    if ($button) $classes .= ' bg-eggplant-950 text-white px-3 py-1 rounded';
@endphp

<a {{$attributes(['class' => $classes])}}>{{$slot}}</a>
