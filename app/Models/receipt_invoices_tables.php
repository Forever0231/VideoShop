<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receipt_invoices_tables extends Model
{
    use HasFactory;
    protected $filable = ['quantity','cassetses_id','price'];

    public function Cassetses()
    {
        return $this-> belongsTo(Cassetses::class,'cassetses_id','id');
    }
}
