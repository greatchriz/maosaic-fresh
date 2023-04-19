<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminmailcontent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    // decleare that this model table is adminmails
    protected $table = 'adminmails';
}
