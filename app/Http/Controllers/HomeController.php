<?php

namespace App\Http\Controllers;

use App\BorrowHistory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $id)
    {

        $books = auth()->user()->borrow;
        $data = DB::table('borrow_history')
            ->join('books', 'books.id', '=','borrow_history.book_id')
            ->join('users', 'users.id', '=', 'borrow_history.user_id')
            ->join('authors', 'authors.id', '=', 'books.author_id')
            ->where('user_id',auth()->id() )->get();

        return view('home', [
            'title' => auth()->user()->name,
            'books' => $books,
            'data' => $data,
        ]);
    }


}
