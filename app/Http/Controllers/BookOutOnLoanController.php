<?php

namespace App\Http\Controllers;

use App\Models\BookOutOnLoan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookOutOnLoanController extends Controller
{
    public function index()
    {   
        $data = BookOutOnLoan::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {

        // $data = new BookOutOnLoan();
        // $data->issue_date = $request->issue_date -1;
        // $data->
        // return
    }
    
    
    public function show(int $id)
    {
        $data = BookOutOnLoan::find($id);
    
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(int $id)
    {
        return response()->json(BookOutOnLoan::destroy($id));
    }
}
