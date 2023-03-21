<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'chain',
        'total_supply',
        'description',
        'twitter_link',
        'discord_link',
        'website_link',
        'profile_image_path',
        'banner_image_path',
        'pre_sale_timezone',
        'pre_sale_date',
        'pre_sale_time',
        'pre_sale_price',
        'mint_date',
        'mint_time',
        'mint_price',
        'founder_name',
        'founder_email',
        'founder_phone',
        'status',
        'project_category_id',
    ];
}
