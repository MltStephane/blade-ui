@props([
    'title' => null,
    'actions' => $slot ?? null,
])

<div {{ $attributes->merge(['class' => 'border-b border-gray-200 pb-4 sm:pb-6 lg:pb-8 sm:flex sm:items-center sm:justify-between']) }}>
    <div class="text-base font-semibold leading-6 text-gray-900">{{ $title }}</div>

    @if($actions)
        <div class="mt-3 flex sm:ml-4 sm:mt-0 gap-x-2">
            {!! $actions !!}
        </div>
    @endif
</div>
