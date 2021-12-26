<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;

    public $timestamps = false;

    protected $fillable = ['name'];

    protected $allowedSorts = ['id'];

    public function products(){
        return $this->hasMany(Product::class);
    }

}
