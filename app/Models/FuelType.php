<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class FuelType extends Model
{
    use HasUuid;

    protected $table = 'fuel_types';

    public function gazStations() {
        return $this->belongsToMany(GazStation::class, 'gaz_station_fuel_types', 'fuel_type_id', 'gaz_station_id');
    }
}
