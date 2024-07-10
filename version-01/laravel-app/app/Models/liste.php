<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class liste extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'jours',
        'a',
        'b',
        'c',
        'd',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
