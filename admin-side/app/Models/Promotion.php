<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotion';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_service',
        'id_gestionnaire',
        'reduction',
        'date_debut',
        'date_fin',
    ];
}
