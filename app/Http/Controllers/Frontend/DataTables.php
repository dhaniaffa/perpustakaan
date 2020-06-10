<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataTables extends Controller
{
    public function index(){
        $book = DB::table('books')->get();
        return view('frontend.book.search',[
            'books' =>$book,
        ]);
    }

}
