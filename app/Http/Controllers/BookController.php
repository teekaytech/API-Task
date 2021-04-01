<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return Book::all();
    }

    public function show(Book $book) {
        return $book;
    }

    public function store(Request $request) {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    public function delete(Book $book) {
        $book ->delete();
        return response()->json(null, 204);
    }
}
