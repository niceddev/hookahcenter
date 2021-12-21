<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory;
    use AsSource;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
