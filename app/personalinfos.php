<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalinfos extends Model
{
    protected $table = "personal_info";

    protected $casts = [
        'subjects' => 'array'
    ];
}
