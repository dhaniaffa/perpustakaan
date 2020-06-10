<?php
// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

//Author Index
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
});

// Tambah Penulis
Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Tambah Data', route('admin.author.create'));
});

//Edit Penulis
Breadcrumbs::for('admin.author.edit', function ($trail, $author) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Edit Data', route('admin.author.edit', $author));
});

Breadcrumbs::for('admin.author.update', function ($trail, $author) {

});

// Book
Breadcrumbs::for('admin.book.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
});

// Tambah Data Buku
Breadcrumbs::for('admin.book.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Tambah Data', route('admin.book.create'));
});

// Edit Buku
Breadcrumbs::for('admin.book.edit', function ($trail, $book) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Edit Data', route('admin.book.edit', $book));
});

// Pinjam
Breadcrumbs::for('admin.borrow.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Log Peminjaman', route('admin.borrow.index'));
});

// Laporan Buku
Breadcrumbs::for('admin.report.book', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Laporan Buku', route('admin.report.book'));
});

// Laporan User
Breadcrumbs::for('admin.report.user', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Laporan User', route('admin.report.user'));
});
