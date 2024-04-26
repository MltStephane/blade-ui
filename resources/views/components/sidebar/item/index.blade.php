@props([
    'label' => $slot ?? null,
    'icon' => null,
    'activePattern' => null,
])

<li>
    <a
        {{ $attributes->merge(['class' => implode(' ', ['group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold items-center', request()->routeIs($activePattern) ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800'])]) }}
    >
        @if($icon)
            <x-icon name="{{ $icon }}" class="h-6 w-6 shrink-0" />
        @endif
        <span>{{ $label }}</span>
    </a>
</li>
