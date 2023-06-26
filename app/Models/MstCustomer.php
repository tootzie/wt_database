<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstCustomer extends Model
{
    use HasFactory;
    protected $table = 'mstcustomer';
    protected $primaryKey = 'custcode';
    public $timestamps = false;
    protected $fillable = [
        'custname',
        'pricetype',
    ];
}
