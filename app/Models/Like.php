<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function book()
    {
        return $this ->belongsTo('App\Book','book_id');
    }
    use HasFactory;
}
