<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Patient extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "patients";

    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'phone',
        'cellphone',
        'passcode'
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

}
