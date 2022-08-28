<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'published',
        'published_at',
    ];

    public const fields = [
        'title' => [
            'display_as' => 'Title',
            'type'       => 'input',
            'validate'   => 'required|max:127',
        ],
        'body' => [
            'display_as' => 'Body',
            'type'       => 'texteditor',
            'validate'   => 'required',
        ],
        'published' => [
            'display_as' => 'Published',
            'type'       => 'select',
            'options'    => 'yes_no',
            'validate'   => 'required',
        ],
        'published_at' => [
            'display_as' => 'Published At',
            'type'       => 'datetime',
            'validate'   => '',
        ],
        'user_id' => [
            'display_as' => 'Author',
            'type'       => 'foreign',
            'options'    => 'users',
            'validate'   => '',
        ],
    ];

    public static function getValidationRules()
    {
        $rules = [];
        foreach(Post::fields as $field => $opts)
        {
            $rules[$field] = $opts['validate'];
        }
        return $rules;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return User::pluck('name', 'id');
    }

    public function yes_no()
    {
        return [
            '0' => 'No',
            '1' => 'Yes',
        ];
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
