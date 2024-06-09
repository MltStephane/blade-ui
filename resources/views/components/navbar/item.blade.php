@props([
    'label' => $slot ?? null,
    'activeRoutePattern' => false,
])

<a
    {{ $attributes->merge([
        'href' => '#',
        'class' =>str('w-full block md:w-auto py-2 px-4 hover:bg-gray-100 rounded-lg text-sm leading-6')->append($activeRoutePattern ? ' font-bold text-dark' : ' text-slate-700'),
    ]) }}
>
    {!! $label !!}
</a>
