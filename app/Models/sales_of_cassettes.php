<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_of_cassettes extends Model
{
    use HasFactory;

    protected $filable = ['clients_full_name','address','tel','sales_of_cassettes_tables_id'];

    public function sales_of_cassettes_tables()
    {
        return $this->belongsto(sales_of_cassettes_tables::class,'sales_of_cassettes_tables_id','id');
    }
}
