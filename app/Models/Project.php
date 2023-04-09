<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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
        'is_super_featured',
        'is_featured',
        'is_link_verified',
        'is_dooxed_kyc_verified',
    ];

    public function getMintingStatusAttribute()
    {
        $now = Carbon::now();
        $today = Carbon::now()->endOfDay();
        $thisWeek = Carbon::now()->endOfWeek();
        $mintDate = Carbon::create($this->mint_time);
        if ($mintDate->lte($today) && $mintDate->gte($now)) {
            return "Today";
        } elseif($mintDate->gte($today) && $mintDate->lte($thisWeek)) {
            return "This Week";
        } elseif($mintDate->lt($now)) {
            return "Minting Now";
        } else {
            return "Future";
        }
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id', 'id');
    }

    public function eventRagistrations()
    {
        return $this->hasMany(EventRegistration::class, 'project_id', 'id');
    }
}
