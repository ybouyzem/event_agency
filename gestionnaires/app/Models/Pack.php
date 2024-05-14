<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $table = 'pack';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'titre',
        'description',
        'prix',
    ];
}
