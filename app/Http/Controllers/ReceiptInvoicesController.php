<?php

namespace App\Http\Controllers;

use App\Models\receipt_invoices;
use Illuminate\Http\Request;

class ReceiptInvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receipt_invoices = receipt_invoices::all();
        return $receipt_invoices;
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
        $receipt_invoices = new receipt_invoices;
        $receipt_invoices->date = $request->date;
        $receipt_invoices->receipt_invoices_tables_id = $request->receipt_invoices_tables_id;
        $receipt_invoices->save();
        return $receipt_invoices;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $receipt_invoices = receipt_invoices::find($id);
        return $receipt_invoices;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(receipt_invoices $receipt_invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, receipt_invoices $receipt_invoices)
    {
        $receipt_invoices = receipt_invoices::find($request->$id);
        $receipt_invoices->date = $request->date;
        $receipt_invoices->receipt_invoices_tables_id = $request->receipt_invoices_tables_id;
        $receipt_invoices->save();
        return $receipt_invoices;
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
