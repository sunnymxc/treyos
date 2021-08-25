<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('book');
    }
    
    public function store(Request $request)
    {
        $book = new Book;
        $book->to = $request->to;
        $book->from = $request->from;
        $book->goods = $request->goods;
        $book->dom = $request->dom;
        $book->tom = $request->tom;
        $book->save();
        return redirect('book')->with('status', 'Booking Has Been inserted');
    }
}