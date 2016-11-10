<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Test extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "tests";

    protected $fillable = [
        'id'
    ];

    public function reports_id()
    {
        return $this->belongsTo(Reports::class);
    }
    public function type_tests_id()
    {
        return $this->belongsTo(TypeTest::class);
    }

    public function results()
    {
        return $this->hasMany(Results::class);
    }

}
