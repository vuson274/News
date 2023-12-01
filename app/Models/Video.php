<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['title', 'category_id','path'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
