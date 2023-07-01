<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OLigne extends Model
{
     /* O:Order ==>Orders Lignes */
     use HasFactory;
     protected $table="olignes";
     protected $fillable = [
         'order_id','book_id','quantity'
     ];
    /**
     * Get the user that owns the OLigne
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
