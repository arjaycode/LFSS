<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostItem extends Model
{
    /** @use HasFactory<\Database\Factories\LostItemFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'item_name',
        'description',
        'color',
        'brand',
        'date_lost',
        'location_id',
        'location_description',
        'is_urgent',
        'is_valuable',
        'photos',
        'status',
        'matched_found_item_id',
        'claimed_at',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
