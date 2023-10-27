<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagories extends Model
{
    use HasFactory;

    protected $primaryKey = 'cata_id';
    protected $fillable = [
        'cata_name',
        'cata_icon',
        'cata_username'
    ];

    // protected $guarded = [];
}
