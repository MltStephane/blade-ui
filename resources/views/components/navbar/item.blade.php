@props([
    'label' => $slot ?? null,
])

<a
    {{ $attributes->merge(['href' => '#', 'class' => 'w-full block md:w-auto py-2 px-4 hover:bg-gray-100 rounded-lg text-sm font-semibold leading-6 text-gray-900']) }}
>
    {!! $label !!}
</a>