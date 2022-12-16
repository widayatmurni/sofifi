<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = ['title', 'slug', 'page', 'publish', 'language_id'];
    protected $table = 'pages';
}
