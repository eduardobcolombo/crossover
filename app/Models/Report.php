<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Report extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "reports";

    protected $fillable = [
        'id',
        'patient_id',
        'text'
    ];

    public function patient_id()
    {
        return $this->belongsTo(Patient::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

}
