<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index() {
        return Book::all();
    }

    public function show(Book $book) {
        return $book;
    }

    public function store(Request $request) {
        $validation = Validator::make($request->all(), [
            'title' => ['required', 'string'],
            'author' => ['required', 'string'],
            'pages' => ['required', 'numeric',],
        ]);

        if (count($validation->errors()) === 0) {
            $book = Book::create($request->all());
            return response()->json($book, 201);
        }

        return response()->json([
            'messages' => $validation->errors(),
            'info' => ['Book not created.']
        ],404);
    }

    public function delete(Book $book) {
        $book ->delete();
        return response()->json(null, 204);
    }
}
