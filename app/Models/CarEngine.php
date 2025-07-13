<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarEngine extends Model
{
    protected $fillable = ['name'];

    public function models()
    {
        return $this->belongsToMany(CarModel::class, 'car_model_engine');
    }
}
