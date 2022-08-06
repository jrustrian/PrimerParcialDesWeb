<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customer';
    public $timestamps=false;
    protected $fillable=[
        'id', 'name','address','cell_pone','email', 'customer_type'
    ];

    protected $primaryKey='id';
}
