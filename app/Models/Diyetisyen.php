<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diyetisyen extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function randevular()
    {
        return $this->hasMany(Randevu::class);
    }

}
