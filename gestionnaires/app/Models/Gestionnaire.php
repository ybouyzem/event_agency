<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionnaire extends Model
{
    protected $table = 'gestionnaire';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'type',
        'proprietaire',
        'nom',
        'ville',
        'adresse',
        'telephone',
        'detail',
        'email',
        'motDePasse',
    ];
}
