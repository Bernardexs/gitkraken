<?php

namespace App\Http\Controllers;

use App\Models\colorado;
use Illuminate\Http\Request;

class ColoradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colorado=colorado::all();
        return response()->json(['colorado'=>$colorado],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(colorado $colorado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(colorado $colorado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, colorado $colorado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(colorado $colorado)
    {
        //
    }
}
