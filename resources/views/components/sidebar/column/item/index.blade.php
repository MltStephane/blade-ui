@props([
    'label' => $slot ?? null,
    'icon' => null,
    'activePattern' => null,
])

<li>
    <a
        {{ $attributes->merge(['class' => implode(' ', ['group flex flex-col lg:flex-row gap-x-3 rounded-md p-2 leading-6 font-semibold items-center', request()->routeIs($activePattern) ? 'bg-gray-800 text-white' : 'text-gray-400 hover:text-white hover:bg-gray-800'])]) }}
    >
        @if($icon)
            <x-icon name="{{ $icon }}" class="h-6 w-6 shrink-0" />
        @endif
        <div class="text-2xs md:text-xs whitespace-wrap text-center">{{ $label }}</div>
    </a>
</li>
