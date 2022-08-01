<?php

namespace App\Models;

class House extends BaseModel
{

    protected $casts = [
        'direction' => 'array',
    ];
}
