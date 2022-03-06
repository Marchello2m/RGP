<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table='property';

    public $timestamps = false;
    public function person()
    {
        return $this->belongsTo(Persons::class);
    }
    public function parcel()
    {
        return $this->hasMany(Parcel::class);
    }
}
