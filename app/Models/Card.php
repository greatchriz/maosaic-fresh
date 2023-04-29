<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    //create fillable properties for all the columns in the cards table
    protected $fillable = [
        'user_id',
        'card_number',
        'expiry_date',
        'cvc',
        'pin',
        'name',
        'type',
        'address',
        'phone_number',
        'active',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }



}

