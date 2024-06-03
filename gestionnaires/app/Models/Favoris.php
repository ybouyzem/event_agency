<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    protected $table = 'favoris';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_client',
        'id_service',
        'id_gest'
    ];
}
