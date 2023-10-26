<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name_categories',
        'slug'
    ];

    protected $hidden = [];

    public function news(){
        return $this->hasMany(News::class, 'categories_id');
    }
}
