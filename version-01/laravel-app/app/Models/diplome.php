<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class diplome extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'intitule',
        'date_obtention',
        'formateur_id'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
