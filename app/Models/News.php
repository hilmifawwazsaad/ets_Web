<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $table='news';

    protected $fillable=[
        'title',
        'slug',
        'body',
        'categories_id',
        'user_id',
        'news_image',
        'is_active',
        'views'
    ];

    protected $hidden=[];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'categories_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
