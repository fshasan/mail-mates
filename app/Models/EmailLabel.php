<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailLabel extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_id',
        'label_id',
    ];
}
