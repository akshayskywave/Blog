<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogmodel extends Model
{
    use HasFactory;
    Protected $table ="blogname";
    protected $primaryKey ="Blog_id";
}
