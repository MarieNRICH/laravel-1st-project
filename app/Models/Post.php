<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // je charge automatiquement le user à chq fois que je récupère un msg
    protected $with = ['user'];

    // nom de la fonction au singulier car 1 seul user en relation
    // cardinalité 1,1

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // nom au pluriel car un msg peut regrper pls comments
    // cardinalité 0,n

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
