<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'nomComplet',
        'ville',
        'telephonr',
        'email',
        'motDePasse',
    ];
}
