@props([
    'label' => null,
    'icon' => null,
    'description' => $slot ?? null,
    'href' => '#',
])

<div {{ $attributes->merge(['class' => 'group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50']) }}>
    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
        <x-icon name="{{ $icon }}" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" />
    </div>
    <div class="flex-auto">
        <a href="{{ $href }}" class="block font-semibold text-gray-900">
            {!! $label !!}
            <span class="absolute inset-0"></span>
        </a>
        <p class="text-gray-600">{!! $description !!}</p>
    </div>
</div>
