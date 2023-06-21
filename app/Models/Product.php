<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Team;
use App\Models\Color;
use App\Models\Gender;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function genders(){
        return $this->belongsToMany(Gender::class);
    }
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
    public function sizes(){
        return $this->belongsToMany(Size::class, 'size_product');
    }
}
