@props([
    'src' => null,
    'webp' => null,
])

@if (null !== $webp && null !== $src)
    <picture>
        <source srcset="{{ $webp }}" type="image/webp" />
        <source srcset="{{ $src }}" type="{{ \MltStephane\BladeUi\Services\ImageMimeTypeService::get($src) }}" />
        <img
            src="{{ $src }}"
            {{ $attributes->merge(['class' => 'w-full object-cover']) }}
        />
    </picture>
@elseif (null === $webp && null !== $src)
    <img
        src="{{ $src }}"
        {{ $attributes->merge(['class' => 'w-full object-cover']) }}
    />
@else
    <div class="p-0.5 w-full object-cover"></div>
@endif
