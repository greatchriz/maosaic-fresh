<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'title',
        'slug',
        'image_path',
    ];

    // an article has many sections and a section belongs to one articles
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
