<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'price','image',
    ];

    public function olignes(){
        return $this->hasMany(OLigne::class, 'book_id');
    }

    public function orders(){
        return $this->belongsToMany(Order::class,Oligne::class);
    }
}
