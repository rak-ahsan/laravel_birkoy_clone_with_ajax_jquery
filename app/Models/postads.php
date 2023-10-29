<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\image;

class postads extends Model
{
    use HasFactory;
    protected $primaryKey = 'ads_id';
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(image::class);
    }
}
