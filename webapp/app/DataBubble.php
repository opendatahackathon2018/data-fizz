<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBubble extends Model
{
    protected $guarded = [];

    public function type() {
        return $this->belongsTo(BubbleType::class,'bubble_type_slug','slug');

    }
}
