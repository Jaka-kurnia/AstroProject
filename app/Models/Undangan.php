<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $fillable = [
        'judul',
        'tanggal_acara',
        'lokasi',
        'status',
        'user_id'
    ];

    public function user()
    {
        return $this->belogsTo(User::class);
    }
}
