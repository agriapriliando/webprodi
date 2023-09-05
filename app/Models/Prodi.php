<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
