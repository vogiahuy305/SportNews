<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function genre(){
        return $this->belongsTo(Genre::class,'genre_id');
    }
    public function sport(){
        return $this->belongsTo(Sport::class,'sport_id');
    }
}
