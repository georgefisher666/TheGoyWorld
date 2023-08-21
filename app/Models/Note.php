<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = "note";
    protected $fillable = ["title","content", "color", "created_at", "updated_at"];
}
