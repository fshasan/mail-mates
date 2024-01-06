<?php

namespace App\Models;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory, Filterable;

    protected $fillable = ["user_id", "sender", "recievers", "subject", "body", "email_type"];

    protected $casts = [
        'recievers' => 'array',
    ];
}
