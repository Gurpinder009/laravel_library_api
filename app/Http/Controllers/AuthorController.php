<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return response()->json(Author::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            "author_name"=>"required|min:3"
        ]);
        $data = new Author();
        $data = $request->author_name;
        return response()->json($data);
    }

    public function show(int $id)
    {
        return response()->json(Author::find($id));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            "author_name"=>"required|min:3"
        ]);
        $data = Author::find($id);
        $data = $request->author_name;
        return response()->json($data);
    }

    public function destroy(int $id)
    {
        return response()->json(Author::destroy($id));
    }
}
