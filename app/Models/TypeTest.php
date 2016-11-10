<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class TypeTest extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "type_tests";

    protected $fillable = [
        'id',
        'title',
        'description'
    ];

}
