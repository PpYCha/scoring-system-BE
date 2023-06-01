<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubEvent extends Model
{
    use HasFactory;
    protected $table = 'subevents';
    protected $fillable = [
        'title',
        'date',
        'event_id',
    ];
}