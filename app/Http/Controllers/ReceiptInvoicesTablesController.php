<?php

namespace App\Http\Controllers;

use App\Models\receipt_invoices_tables;
use Illuminate\Http\Request;

class ReceiptInvoicesTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receipt_invoices_tables = receipt_invoices_tables::all();
        return $receipt_invoices_tables;
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
        $receipt_invoices_tables = new receipt_invoices_tables;
        $receipt_invoices_tables->date = $request->quantity;
        $receipt_invoices_tables->cassetses_id = $request->cassetses_id;
        $receipt_invoices_tables->price = $request->price;
        $receipt_invoices_tables->save();
        return $receipt_invoices_tables;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $receipt_invoices_tables = receipt_invoices_tables::find($id);
        return $receipt_invoices_tables;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(receipt_invoices_tables $receipt_invoices_tables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, receipt_invoices_tables $receipt_invoices_tables)
    {
        $receipt_invoices_tables = receipt_invoices::find($request->$id);
        $receipt_invoices_tables->date = $request->quantity;
        $receipt_invoices_tables->receipt_invoices_tables_id = $request->cassetses_id;
        $receipt_invoices_tables->receipt_invoices_tables_id = $request->price;
        $receipt_invoices_tables->save();
        return $receipt_invoices_tables;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        receipt_invoices_tables::destroy($id);
        return true;
    }
}
