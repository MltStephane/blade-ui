@props([
    'title' => $slot,
])

<div {{ $attributes->class(['w-full text-xl font-semibold text-gray-900 sm:text-2xl']) }}>
    {{ $title }}
</div>
