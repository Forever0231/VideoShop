<?php

namespace App\Http\Controllers;

use App\Models\sales_of_cassettes_tables;
use Illuminate\Http\Request;

class SalesOfCassettesTablesController extends Controller
{
    public function index()
    {
        $sales_of_cassettes_tables = sales_of_cassettes_tables::all();
        return $sales_of_cassettes_tables;
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
        $sales_of_cassettes_tables = new sales_of_cassettes_tables;
        $sales_of_cassettes_tables->quantity = $request->quantity;
        $sales_of_cassettes_tables->price = $request->price;
        $sales_of_cassettes_tables->cassetses_id = $request->cassetses_id;
        $sales_of_cassettes_tables->save();
        return $sales_of_cassettes_tables;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sales_of_cassettes_tables = sales_of_cassettes_tables::find($id);
        return $sales_of_cassettes_tables;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sales_of_cassettes_tables $sales_of_cassettes_tables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sales_of_cassettes_tables $sales_of_cassettes_tables)
    {
        $sales_of_cassettes_tables = sales_of_cassettes_tables::find($request->$id);
        $sales_of_cassettes_tables->quantity = $request->quantity;
        $sales_of_cassettes_tables->price = $request->price;
        $sales_of_cassettes_tables->cassetses_id = $request->cassetses_id;
        $sales_of_cassettes_tables->save();
        return $sales_of_cassettes_tables;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        receipt_invoices::destroy($id);
        return true;
    }
}
