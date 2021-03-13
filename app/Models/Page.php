<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'author',
        'category',
        'url',
        'content'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'page_category');
    }

    public function user() {
        return $this->belongsTo(User::class, 'author');
    }
}
