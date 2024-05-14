<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackService extends Model
{
    protected $table = 'pack_service';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_pack',
        'id_service',
    ];
}
