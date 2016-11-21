<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Test extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'id', 'description', 'type_test_id', 'report_id'
    ];

    public function type_test()
    {
        return $this->belongsTo(TypeTest::class);
    }


}
