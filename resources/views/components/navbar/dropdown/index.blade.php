@props([
    'label' =>  null,
])

<div class="relative" x-data="{ show: false }" @click.outside="show = false">
    <x-blade-ui::navbar.item :$label @click="show = !show" />

    <div
        x-show="show"
        x-transition
        class="absolute top-full left-0 right-0 z-10 mt-1 md:w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5"
    >
        <div class="p-4">
            {{ $slot }}
        </div>
    </div>
</div>
