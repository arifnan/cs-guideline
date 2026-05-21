<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'order_number'
    ];

public function category()
{
    return $this->belongsTo(Category::class);
}

public function items()
{
    return $this->hasMany(SectionItem::class);
}
}