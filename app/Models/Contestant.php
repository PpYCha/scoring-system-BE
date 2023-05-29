<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    use HasFactory;
    protected $table = 'contestants';
    protected $fillable = [
        'name',
        'municipality',
        'age',
        'weight',
        'height',
        'shoeSize',
        'swimsuitSize',
        'bust',
        'waist',
        'hips',
        'nickname',
        'dateOfBirth',
        'birthPlace',
        'event_id',
        'cotestant_number',

    ];
}