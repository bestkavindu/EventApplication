<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title',
        'where',
        'when',
        'date',
        'music_type',
        'event_type',
        'zone',
        'price',
        'managerName',
        'email',
        'phone',
        'desc',
        'status'
        ];

    protected $casts = [
        'event_type' => 'array',
    ];
}
