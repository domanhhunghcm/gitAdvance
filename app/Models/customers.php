<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table="customers";
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function formatData()
    {
        return [
            "customer_id"=>$this->id,
            "active"=>$this->active,
            "name"=>$this->name,
            "username"=>$this->user->name
        ];
    }
}
