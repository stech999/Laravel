<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adress',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
