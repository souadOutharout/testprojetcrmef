<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profil extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'FirstName',
        'LastName',
        'CIN',
        'email',
        'password',
        'Bio',
        'role',
        'image',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
