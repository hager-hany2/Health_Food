<?php

namespace App\Actions;

use App\Models\image;


class ImageModelSave
{
    public static function make($id, $model_name, $image_file)
    {
        image::query()->create(
            [
                'imageable_id' => $id,
                'imageable_type' => 'App\Models\\' . $model_name,
                'name' => $image_file,
            ]
        );
    }

}
