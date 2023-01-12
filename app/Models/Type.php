<?php

namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'workflow',
        'slug',

    ];
    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
}