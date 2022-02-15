<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;


    protected $fillable=[
        'movie_name',
        'movie_description',
        'movie_gener',
        // 'category_id'
    ];
    public function categrroy(){
        return $this->belongsToMany(Categorry::class ,'genre_movie');
    }

   
}
