<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class annonce extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'module_type',
        'category',
        'Description',
        'content',
        'document',
        'formateur_name'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
