<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guerded = ['created_at', 'deleted_at', 'updated_at' ];
    use HasFactory;
}
