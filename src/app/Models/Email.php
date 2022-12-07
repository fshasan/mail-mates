<?php

namespace App\Models;

use App\Models\User;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory, Filterable;

    protected $fillable = ["sender", "recievers", "subject", "body", "email_type"];

    protected $casts = [
        'recievers' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
