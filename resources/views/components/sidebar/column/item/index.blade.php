@props([
    'label' => $slot ?? null,
    'icon' => null,
    'activePattern' => null,
])

<li>
    <a
        {{ $attributes->merge([
            'class' => implode(' ', [
                'group flex flex-col xl:flex-row gap-2 rounded-md p-2 font-medium items-center',
                request()->routeIs($activePattern) ? 'bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-white' : 'text-gray-800 hover:bg-gray-200 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800'
            ])
        ]) }}
    >
        @if($icon)
            <x-icon name="{{ $icon }}" class="h-6 w-6 shrink-0" />
        @endif
        <div class="hidden md:block text-2xs md:text-sm whitespace-wrap text-center">{{ $label }}</div>
    </a>
</li>
