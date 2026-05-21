<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentItem extends Model
{
    protected $fillable = [
        'content_id',
        'title',
        'content',
        'order_number'
    ];

public function content()
{
    return $this->belongsTo(Content::class);
}
}