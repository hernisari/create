<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Artikel;
class Artikel extends Model
{
    protected $table='artikel';
    protected $fillable=[
        'nama', 'users_id'
    ];
    protected $casts=[ 
    ];
}
