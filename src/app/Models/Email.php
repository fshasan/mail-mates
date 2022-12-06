<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ["sender_id", "reciever_id", "subject", "body", "email_type"];

    protected $casts = [
        'reciever_id' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
