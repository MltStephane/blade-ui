@props([
    'rightItems' => null,
    'logo' => null,
])

<header
    class="bg-white/80 backdrop-blur fixed top-0 w-full z-20 item border-b drop-shadow-sm"
    x-data="{ showMobileNavbar: false }"
    @click.outside="showMobileNavbar = false"
    x-cloak
>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-4" aria-label="Global">
        <div class="flex lg:flex-1 px-4">
            @if(null !== $logo)
                {!! $logo !!}
            @else
                <a href="{{ route('public.homepage') }}" class="h-full flex items-center justify-center">
                    {{ config('app.name') }}
                </a>
            @endif
        </div>
        <div class="flex lg:hidden">
            <button
                @click="showMobileNavbar = true"
                type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
            >
                <span class="sr-only">Open main menu</span>
                <x-icon name="bars-3" class="h-6 w-6" />
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-1">
            {!! $slot !!}
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-1">
            @if(null !== $rightItems)
                {{ $rightItems }}
            @endif
        </div>
    </nav>

    <div
        x-show="showMobileNavbar"
        class="lg:hidden"
        role="dialog"
        aria-modal="true"
    >
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white p-3 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                @if(null !== $logo)
                    {!! $logo !!}
                @else
                    <a href="{{ route('public.homepage') }}" class="h-full flex items-center justify-center">
                        {{ config('app.name') }}
                    </a>
                @endif
                <button @click="showMobileNavbar = false" type="button">
                    <x-icon name="x-mark" class="h-6 w-6" />
                </button>
            </div>
            <div class="border-t mt-3 flow-root fixed left-0 right-0 p-4 bg-white">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        {!! $slot !!}
                        @if(null !== $rightItems)
                            {{ $rightItems }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
</header>
