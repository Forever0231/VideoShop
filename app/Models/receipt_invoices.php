<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receipt_invoices extends Model
{
    use HasFactory;
    protected $filable = ['date','receipt_invoices_tables_id'];

    public function receipt_invoices_tables()
    {
        return $this->belongsTo(receipt_invoices_tables::class,'receipt_invoices_tables_id','id');
    }
}
