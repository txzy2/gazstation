<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUuid;

class Terminal extends Model
{
    use HasUuid;

    protected $table = 'terminals';

    public function gazStation() {
        return $this->belongsTo(GazStation::class, 'gaz_station_id');
    }

    public function fuelTypes() {
        return $this->gazStation->fuelTypes();
    }
}
