<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\postads;

class image extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagename',
        'ads_id',
    ];

    public function posts()
    {
        return $this->belongsTo(postads::class);
    }
}
