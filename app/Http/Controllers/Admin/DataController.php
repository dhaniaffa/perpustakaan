<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;

class DataController extends Controller
{
//    Menampilkan Author Buku
    public function authors(){
        return datatables()->of(Author::orderBy('name','ASC'))
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->toJson();
    }

//    Menampilkan Buku
    public function books(){
        return datatables()->of(Book::with('author')->orderBy('title','ASC'))
            ->addColumn('author', function (Book $model){
                return $model->author->name;
            })
            ->editColumn('cover', function (Book $model){
                return '<img src="'.$model->getCover().'" height="150px">';
            })
            ->addColumn('action', 'admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }

    // Log Peminjaman
    public function borrows(){
//        $pinjam = BorrowHistory::where('returned_at', null)->latest();
        $pinjam = BorrowHistory::isBorrow()->latest();

        return datatables()->of($pinjam)
            ->addColumn('user', function (BorrowHistory $model){
                return $model->user->name;
            })
            ->addColumn('title', function (BorrowHistory $model){
                return $model->book->title;
            })
            ->addColumn('date', function (BorrowHistory $model){
                return $model->book->created_at;
            })
            ->addColumn('action', 'admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}
