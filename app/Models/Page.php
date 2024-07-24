<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'user_id']; // Ensure user_id is fillable

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
