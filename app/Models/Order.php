<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','date'
    ];
    protected $table='orders';
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function olignes(){
        return $this->hasMany(Oligne::class, 'order_id');
    }
    public function books(){
        return $this->belongsToMany(Book::class,OLigne::class);
    }
}
