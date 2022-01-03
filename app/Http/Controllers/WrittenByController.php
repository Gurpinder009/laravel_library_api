<?php

namespace App\Http\Controllers;

use App\Models\WrittenBy;
use Illuminate\Http\Request;

class WrittenByController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json("It is written by");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WrittenBy  $writtenBy
     * @return \Illuminate\Http\Response
     */
    public function show(WrittenBy $writtenBy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WrittenBy  $writtenBy
     * @return \Illuminate\Http\Response
     */
    public function edit(WrittenBy $writtenBy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WrittenBy  $writtenBy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WrittenBy $writtenBy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WrittenBy  $writtenBy
     * @return \Illuminate\Http\Response
     */
    public function destroy(WrittenBy $writtenBy)
    {
        //
    }
}
