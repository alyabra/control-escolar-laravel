
@php
$classes ='block w-full rounded-md bg-slate-100 hover:bg-slate-300 flex justify-between font-bold border bordor-slate-900 my-1 px-4 font-bold ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
