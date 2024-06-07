@props([
    'bottom' => null,
    'content' => null,
    'topbar' => null,
    'topBarClasses' => null,
])

<div x-data="{ showOnMobile: false }" x-cloak>
    <div x-show="showOnMobile" class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-900/80"></div>

        <div class="fixed inset-0 flex">
            <div class="relative mr-16 flex w-full max-w-xs flex-1">
                <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                    <button @click="showOnMobile = false" type="button" class="-m-2.5 p-2.5">
                        <span class="sr-only">Close sidebar</span>
                        <x-icon name="x" class="h-6 w-6 text-white" />
                    </button>
                </div>

                <div
                    @click.outside="showOnMobile = false"
                    class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4 ring-1 ring-white/10"
                >
                    <div class="flex h-16 shrink-0 items-center border-b border-gray-700">
                        <x-application-logo />
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7 h-full justify-between">
                            <li>
                                <ul role="list" class="space-y-2">
                                    {{ $slot }}
                                </ul>
                            </li>
                            @if($bottom)
                                <li>
                                    <ul role="list" class="space-y-2">
                                        {!! $bottom !!}
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4">
            <div class="flex h-16 shrink-0 items-center border-b border-gray-700">
                <x-application-logo />
            </div>
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7 h-full justify-between">
                    <li>
                        <ul role="list" class="space-y-2">
                            {{ $slot }}
                        </ul>
                    </li>
                    @if($bottom)
                        <li>
                            <ul role="list" class="space-y-2">
                                {!! $bottom !!}
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

    <div class="lg:pl-72">
        <div
            class="{{ \TailwindMerge\Laravel\Facades\TailwindMerge::merge([
                'sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white dark:bg-slate-700 dark:border-slate-800 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8',
                $topBarClasses,
            ]) }}"
        >
            <x-button @click="showOnMobile = true" type="button" class="lg:hidden" sm>
                <span class="sr-only">Open sidebar</span>
                <x-icon name="menu" class="h-6 w-6" />
            </x-button>

            <div class="flex flex-1 gap-x-4 self-stretch items-center justify-between lg:gap-x-6">
                @if($topbar)
                    {!! $topbar !!}
                @endif
            </div>
        </div>

        <main class="p-4 sm:p-6 lg:p-8">
            @if($content)
                {!! $content !!}
            @endif
        </main>
    </div>
</div>
