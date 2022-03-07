<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $table='parcels';
    protected $fillable = [
        'PCN', 'pAres', 'value'
    ];
    public function property()
    {
        return $this->belongsTo(Property::class);
    }


}
