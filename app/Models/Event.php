<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'where',
        'when',
        'zone',
        'date',
        'start_time',
        'end_time',
        'music_type',
        'event_type',
        'price',
        'managerName',
        'email',
        'phone',
        'desc',
        'status'
        ];

    protected $casts = [
        'event_type' => 'array',
        'date' => 'date:Y-m-d',

    ];
}
