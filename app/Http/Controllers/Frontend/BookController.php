<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){

        $books = Book::paginate(10);
        return view('frontend.book.index',[
            'title' => 'Beranda',
            'books' => $books,
        ]);
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $buku = DB::table('books')
            ->where('title', 'like',"%".$cari."%")
            ->paginate(10);

        return view('frontend.book.index',[
            'books' => $buku
        ]);
    }

    public function search(){
        return view('frontend.book.search');
    }

    public function searchData(Request $request){
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('books')
                ->where('title', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
       <li><a href="book/'.$row->id.'">'.$row->title.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function show(Book $book){
        return view('frontend.book.show',[
            'title' => 'Buku: '.$book->title,
            'book' => $book,
        ]);
    }

    public function borrow(Book $book){
        $user = auth()->user();
        if ($user->borrow()
                ->where('books.id', $book->id)
                ->where('returned_at', null)
                ->count()>0)
        {
            return redirect()->back()->with('toast', 'Anda Sudah Meminjam Buku Dengan Judul ' .$book->title);
        }
        $user->borrow()->attach($book);
        $book->decrement('qty');
        return redirect()->back()->with('toast', 'Berhasil Meminjam Buku');
    }
}
