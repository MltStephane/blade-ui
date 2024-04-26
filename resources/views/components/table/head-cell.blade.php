@props([
    'label' => $slot,
])

<th
    scope="col"
    {{ $attributes->class(['p-4 text-left text-xs font-medium uppercase text-gray-500']) }}
>
    {{ $label }}
</th>
