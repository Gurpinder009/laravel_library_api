<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function store(Request $request)
    {   
        $request->validate([
            "book_title" => "required|min:3",
            "book_date_of_publication"=>"required|date_format:y-m-d"
        ]);

        $data = new Book();
        $data->book_title = $request->book_title;
        $data->book_date_of_publication = $request->book_date_of_publication;
        $data->save();
        return response()->json($data);
    }

    public function show(int $id)
    {
        $data = Book::find($id);
        return response()->json($data);
    }

    public function update(Request $request,int $id)
    {   
        $request->validate([
            "book_title" => "min:3",
            "book_date_of_publication"=>"date_format:y-m-d"
        ]);

        $data = Book::find($id);
        $data->book_title = $request->book_title;
        $data->book_date_of_publication = $request->book_date_of_publication;
        $data->save();
        return response()->json($data);
    }

    public function destroy(int $id)
    {
        return response()->json(Book::destory($id));
    }
}
