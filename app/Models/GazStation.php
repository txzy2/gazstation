<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class GazStation extends Model
{
    use HasUuid;

    protected $table = 'gaz_station';

    public $incrementing = false;
    protected $keyType = 'string';

    public function fuelTypes()
    {
        return $this->belongsToMany(FuelType::class, 'gaz_station_fuel_types', 'gaz_station_id', 'fuel_type_id');
    }
}
