@props([
    'title' => null,
    'topbar' => null,
    'headCells' => null,
    'withSearch' => false,
    'searchQueryProperty' => 'searchQuery',
    'actions' => null,
    'paginate' => null,
])

<div class="drop-shadow-md rounded-lg border">
    @if ($title || $withSearch || $actions)
        <div class="space-y-4 p-4">
            @if ($title && $withSearch)
                <div class="pb-4 border-b">
                    <x-blade-ui::table.title :title="$title" />
                </div>
            @endif

            <div class="sm:flex">
                @if ($withSearch)
                    <div class="mb-3 hidden items-center sm:divide-x sm:divide-gray-100 sm:mb-0 sm:flex">
                        <div class="relative mt-1 lg:w-64 xl:w-96">
                            <x-input
                                wire:model.live="{{ $searchQueryProperty }}"
                                placeholder="Search for users"
                            />
                        </div>
                    </div>
                @else
                    @if ($title)
                        <div class="flex items-center">
                            <x-blade-ui::table.title :title="$title" />
                        </div>
                    @endif
                @endif
                @if (null !== $actions)
                    <div class="ml-auto flex items-center space-x-2 sm:space-x-3">
                        {!! $actions !!}
                    </div>
                @endif
            </div>
        </div>
    @endif

    @if ($topbar)
        <div class="w-full border-t p-4 flex items-center">
            {!! $topbar !!}
        </div>
    @endif

    <div class="rounded-b-lg overflow-x-scroll soft-scrollbar">
        <table {{ $attributes->class(['min-w-full table-fixed divide-y divide-gray-200 bg-gray-100']) }}>
            {{ $slot }}
        </table>
    </div>


    @if (null !== $paginate && $paginate->hasPages())
        <div class="w-full border-t border-gray-200 bg-white p-4 rounded-b-lg">
            {{ $paginate->links() }}
        </div>
    @endif
</div>
