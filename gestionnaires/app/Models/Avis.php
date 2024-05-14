<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $table = 'avis';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_service',
        'rating',
        'commentaire',
    ];
}
