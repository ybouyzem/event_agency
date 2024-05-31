<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Gestionnaire extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;
    protected $table = 'gestionnaire';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'type',
        'service',
        'prix',
        'proprietaire',
        'nom',
        'ville',
        'adresse',
        'telephone',
        'detail',
        'compteActiver',
        'email',
        'motDePasse',
        'image1',
        'image2',
        'image3',
        'image4'
    ];
}
