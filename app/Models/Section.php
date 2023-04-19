<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'tag',
    ];

    // a section belongs to one article and an article has many sections
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
