<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// load User model

class Landing_Page extends Model
{
protected $fillable = [
    'title',
    'image',
    'description',
    'posted_date',
    'status',
    'user_id'
];

public function user(){
    return $this->belongsTo(User::class);
}
}
