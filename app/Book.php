<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =
    ['title', 'author'];
    
    public function likes()
    {
      return $this->hasMany('App\Models\Like', 'book_id'); 
    }

    public function genres()
    {
      return $this->belongsToMany('App\Models\Genre', 'book_genre', 'book_id', 'genre_id');
      
    }

    public function author()
    {
      return $this->belongsTo('App\Models\Author','author_id');
      
    }
}