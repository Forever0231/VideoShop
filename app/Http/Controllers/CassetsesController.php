<?php

namespace App\Http\Controllers;

use App\Models\Cassetses;
use Illuminate\Http\Request;

class CassetsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cassetses = (Cassetses::all());
        return $cassetses;
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
        $cassetses = new Cassetses;
        $cassetses->name = $request->name;
        $cassetses->director = $request->director;
        $cassetses->genre = $request->genre;
        $cassetses->save();
        return $cassetses;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cassetses = Cassetses::find($id);
        return $cassetses;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cassetses $cassetses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cassetses $cassetses)
    {
        $cassetses = Cassetses::find($request->$id);
        $cassetses->name = $request->name;
        $cassetses->director = $request->director;
        $cassetses->genre = $request->genre;
        $cassetses->save();
        return $cassetses;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cassetses::destroy($id);
        return true;
    }
}
