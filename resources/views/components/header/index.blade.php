@props([
    'title' => null,
    'actions' => $slot ?? null,
])

<div {{ $attributes->merge(['class' => 'border-b border-gray-200 dark:border-gray-800 sm:flex sm:items-center sm:justify-between']) }}>
    <div class="text-base leading-6 text-gray-900 dark:text-slate-100 w-full">{{ $title }}</div>

    @if($actions->isNotEmpty())
        <div class="mt-3 flex sm:ml-4 sm:mt-0 gap-x-2">
            {!! $actions !!}
        </div>
    @endif
</div>
