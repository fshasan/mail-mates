<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailFolder extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_id',
        'folder_id',
    ];
}
