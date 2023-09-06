<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstAidKit extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function medicines()
    {
        return $this->belongsToMany(Medicine::class)
            ->withPivot('quantity');
    }

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class)
            ->withPivot('quantity');
    }
}
