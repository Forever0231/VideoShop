<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales_of_cassettes_tables extends Model
{
    use HasFactory;
    protected $filable = ['quantity','price','cassetses_id'];

    public function Cassetses()
    {
        return $this-> belongsTo(Cassetses::class,'cassetses_id','id');
    }
}
