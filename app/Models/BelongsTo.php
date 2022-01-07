<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BelongsTo extends Model
{
    use HasFactory;
    protected $table ="belongs_tos";
    protected $primaryKey ="id";
}
