<?php

namespace App\Services\Admin;

use App\Models\Services;


class SaveServicesInfoServices
{
    public static function save($data, $id = null)
    {
        return Services::query()->updateOrCreate(
            ['id' => $id],
            $data
        );
    }
}
