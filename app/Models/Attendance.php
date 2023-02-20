<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // protected $incrementing = false;

    protected $table = 'attendances';

    protected $fillable = [
        'emp_id',
        'att_month',
        'data',
        'totalDay',
        'presentDay',
        'wfoP',
        'wfhP',
        'late',
        'ab',
        'wfoHD',
        'wfhHD',
        'upl',
        'ph',
        'bl',
        'wo',
        'sd',
    ];
}
