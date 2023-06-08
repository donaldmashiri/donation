<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_names',
        'email',
        'image',
        'comments',
        'app_type',
        'amount',
        'status',
    ];
}
