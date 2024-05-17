<?php

namespace MltStephane\BladeUi\Services;

class ImageMimeTypeService
{
    public static function get(string $imagePath): string
    {
        if (app()->isLocal()) {
            return 'image/local';
        }

        return image_type_to_mime_type(exif_imagetype($imagePath));
    }
}
