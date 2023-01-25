<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    use HasFactory;
    protected $table = 'jsons';

    protected $fillable = [
        'token',
        'data',
    ];

}
