<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postData extends Model
{
    use HasFactory;
    protected $table="post_data";
    public function image()
    {
        return $this->morphOne(imageData::class, 'imageable');
    }
    public function comment()
    {
        return $this->morphMany(comments::class, 'commentable');
    }
    public function tag()
    {
        return $this->morphToMany(tag::class,"taggable");
    }
}
