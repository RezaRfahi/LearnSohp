<?php

namespace App\Models;

use Conner\Tagging\Taggable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Taggable;
    use Sluggable;
    use HasFactory;


    protected $fillable = [
        'title', 'price', 'image_path'
    ];

    public function sluggable(): array
    {

        return [
            'slug' => [
                'source' => 'title'
            ]
        ];

    }
}
