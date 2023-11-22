<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['user_id','category_id','title','description','content','type'];
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
