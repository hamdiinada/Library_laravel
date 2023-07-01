<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function booktList(){
         $books=Book::all();
         return view('welcome',compact('books'));
       }
       public function checkout(){
         $order=new Order([
             "user_id"=>1,
             'date'=>'2023-03-09',
         ]);
         $order->save();
         $orders_lignes=[];
         $panier= \Cart::getContent();
         foreach ($panier as $p) {
             $orders_lignes[]= new OLigne([
                 "book_id"=>$p->id,
                 "quantity"=>$p->quantity,
            ]);
         }
         $order->olignes()->saveMany($orders_lignes);
         \Cart::clear();
         return redirect()->route('books.list')->with('success','Product is Added to Cart Successfully !');
       }
 }
