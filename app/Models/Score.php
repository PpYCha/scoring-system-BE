<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $table = 'scores';
    protected $fillable = [
        'score',
        'contestant_id',
        'judge_id',
        'criteria_id',
        'event_id',
        'category_id',
    ];
}