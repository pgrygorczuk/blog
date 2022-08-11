<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'published',
        'published_at',
    ];

    const fields = [
        'title' => [
            'display_as' => 'Title',
            'type' => 'input',
        ],
        'body' => [
            'display_as' => 'Body',
            'type' => 'texteditor',
        ],
        'published' => [
            'display_as' => 'Published',
            'type' => 'bool',
        ],
        'published_at' => [
            'display_as' => 'Published At',
            'type' => 'datetime',
        ],
        'user_id' => [
            'display_as' => 'Author',
            'type' => 'select',
        ],
        'user' => [
            'display_as' => 'Authors Name',
            'type' => 'select',
        ],
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function(Post $post){
            $post->slug = Str::slug($post->title);
            $post->user_id = 1;
        });
    }
}
