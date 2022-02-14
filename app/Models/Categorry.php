<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorry extends Model
{
    use HasFactory;

    protected $fillable=[
        'name_categorry',
        'description_categorry',
    ];
    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
