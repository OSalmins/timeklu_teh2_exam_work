<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atable extends Model
{
    protected $fillable = ['name','price', 'seller_id', 'description','table_kind_id', 'image_path'];
    /** @use HasFactory<\Database\Factories\AtableFactory> */
    use HasFactory;
}

