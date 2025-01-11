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
}
