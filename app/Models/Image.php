<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'project_name',
        'founder_name',
        'founder_email',
        'founder_phone',
        'image',
        'banner',
        'banner_title',
    ];

}
