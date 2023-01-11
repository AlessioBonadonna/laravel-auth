<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_proj',
        'slug',
        'description',
        'dev_lang',
        'dev_framework',
        'team',
        'lvl_dif',
        'link_git'
    ];
    public static function generateSlug($name_proj)
    {
        return Str::slug($name_proj, '-');
    }
}