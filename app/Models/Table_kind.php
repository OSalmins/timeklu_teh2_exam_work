<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_kind extends Model
{
    protected $fillable = ['table_kind'];
    /** @use HasFactory<\Database\Factories\TableKindFactory> */
    use HasFactory;

}

