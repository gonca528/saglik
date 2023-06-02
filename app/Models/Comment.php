<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{    protected $with = ['blog'];

    use HasFactory;

    protected $guarded=[];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
