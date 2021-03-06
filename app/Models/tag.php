<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    protected $guarded=[""];
    public function post()
    {
        return $this->morphedByMany(postData::class,"taggable");
    }
}
