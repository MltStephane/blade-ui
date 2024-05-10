@props([
    'title' => null,
    'actions' => null,
    'bottomActions' => null,
    'width' => 'max-w-4xl',
    'topbar' => null,
    'titlePadding' => 'p-4',
    'bodyPadding' => 'p-4',
    'footerPadding' => 'p-4',
])
<div class="space-y-4 sm:space-y-6 lg:space-y-8 mx-auto {{ $width }} ">
    @if($topbar)
        {!! $topbar !!}
    @endif

    <div {{ $attributes->merge(['class' => 'bg-white dark:bg-slate-700 dark:border-slate-800 rounded-xl drop-shadow-md border dark:text-slate-300']) }}>
        @if ($title || $actions)
            <x-blade-ui::header class="{{ $titlePadding }}">
                @if ($title)
                    <x-slot:title>
                        {!! $title !!}
                    </x-slot:title>
                @endif

                @if ($actions)
                    <x-slot:actions>
                        {!! $actions !!}
                    </x-slot:actions>
                @endif
            </x-blade-ui::header>
        @endif

        <div class="{{ $bodyPadding }}">
            {!! $slot !!}
        </div>

        @if ($bottomActions)
            <div class="border-t border-gray-200 dark:border-slate-800 flex items-center justify-end gap-x-4 {{ $footerPadding }}">
                {!! $bottomActions !!}
            </div>
        @endif
    </div>
</div>
