@props([
    'label' => $slot,
    'actions' => false,
])

<td
    {{ $attributes->class([
        'max-w-sm overflow-hidden truncate p-4 text-base font-normal text-gray-500 xl:max-w-xs',
        'flex justify-end gap-2' => $actions,
    ])
}}>
    {{ $label }}
</td>
