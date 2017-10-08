<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{

	public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    public static function index() {
    	$books = Book::all();
		return response()->json($books);
	}

	public function show($id) {
        $book = Book::find($id);

        if(!$book) {
            return response()->json([
                'message'   => 'Book not found',
            ], 404);
        }

        return response()->json($book);
    }

    public function store(Request $request) {
        $book = new Book();
        $book->fill($request->all());
        $book->save();

        return response()->json($book, 201);
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);

        if(!$book) {
            return response()->json([
                'message'   => 'Book with id='.$id.' not found',
            ], 404);
        }

        $book->fill($request->all());
        $book->save();

        return response()->json($book);
    }

    public function destroy($id) {
        $book = Book::find($id);

        if(!$book) {
            return response()->json([
                'message'   => 'Book with id='.$id.' not found',
            ], 404);
        }

        $book->delete();
    }

}
