<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'statut',
        'id_client',
        'id_service',
        'id_pack',
        'id_promotion',
        'date_reservation',
    ];
}
