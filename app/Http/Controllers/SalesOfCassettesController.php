<?php

namespace App\Http\Controllers;

use App\Models\sales_of_cassettes;
use Illuminate\Http\Request;

class SalesOfCassettesController extends Controller
{
    public function index()
    {
        $sales_of_cassettes = sales_of_cassettes::all();
        return $sales_of_cassettes;
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
        $sales_of_cassettes = new sales_of_cassettes;
        $sales_of_cassettes->clients_full_name = $request->clients_full_name;
        $sales_of_cassettes->address = $request->address;
        $sales_of_cassettes->tel = $request->tel;
        $sales_of_cassettes->sales_of_cassettes_tables_id = $request->sales_of_cassettes_tables_id;
        $sales_of_cassettes->save();
        return $sales_of_cassettes;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sales_of_cassettes = sales_of_cassettes::find($id);
        return $sales_of_cassettes;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sales_of_cassettes $sales_of_cassettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sales_of_cassettes $sales_of_cassettes)
    {
        $sales_of_cassettes = sales_of_cassettes::find($request->$id);
        $sales_of_cassettes->clients_full_name = $request->clients_full_name;
        $sales_of_cassettes->address = $request->address;
        $sales_of_cassettes->tel = $request->tel;
        $sales_of_cassettes->sales_of_cassettes_tables_id = $request->sales_of_cassettes_tables_id;
        $sales_of_cassettes->save();
        return $sales_of_cassettes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sales_of_cassettes $sales_of_cassettes)
    {
        sales_of_cassettes::destroy($id);
        return true;
    }
}
