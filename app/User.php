<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function borrow(){
        return $this->belongsToMany(Book::class, 'borrow_history')->withTimestamps();
    }
    public function log(){
        return DB::table('borrow_history')
            ->join('books', 'books.id', '=','borrow_history.book_id')
            ->join('users', 'users.id', '=', 'borrow_history.user_id')
            ->join('authors', 'authors.id', '=', 'books.author_id')
            ->get();


    }
}
