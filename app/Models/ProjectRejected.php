<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRejected extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'project_name',
        'proj_chain',
        'total_supply',
        'proj_description',
        'twitter',
        'discord',
        'url',
        'time_zone',
        'pre_sale_date',
        'pre_sale_time',
        'pre_sale_price',
        'date',
        'time',
        'price',
        'founder_name',
        'founder_email',
        'founder_phone',
    ];
    
}
