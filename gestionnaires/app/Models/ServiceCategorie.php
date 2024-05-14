<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategorie extends Model
{
    protected $table = 'service_categorie';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_service',
        'id_categorie',
    ];
}
