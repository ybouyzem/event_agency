<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'id_gestionnaire',
        'titre',
        'image',
        'detail',
        'prix',
        'deplacement',
    ];
}
