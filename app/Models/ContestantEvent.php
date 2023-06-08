<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestantEvent extends Model
{
    use HasFactory;

    protected $table = 'contestantevents';
    protected $fillable = [
        'contestant_id',
        'subEvent_id',
    ];
}