<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title',
        'content',
        'featured_image',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'youtube_link',
        'tiktok_link',
        'cat_id',
        'author_id'
    ];
}
