<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
