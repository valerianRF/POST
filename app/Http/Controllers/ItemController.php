<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Item');
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
    public function show(Item $Item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $Item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $Item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $Item)
    {
        //
    }
}