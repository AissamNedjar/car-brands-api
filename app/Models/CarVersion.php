<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarVersion extends Model
{
    protected $fillable = ['car_model_id', 'name'];

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
}
