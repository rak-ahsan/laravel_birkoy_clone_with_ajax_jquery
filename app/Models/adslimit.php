<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adslimit extends Model
{

    protected $primaryKey = 'limits_id';
    protected $guarded = [];

    use HasFactory;
}
