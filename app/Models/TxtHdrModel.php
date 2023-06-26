<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TxtHdrModel extends Model
{
    use HasFactory;
    protected $table = 'trxhdr';
    protected $primaryKey = 'docno';
    public $timestamps = false;
    protected $fillable = [
        'docno',
        'docdate',
        'custcode',
        'notes',
        'totgross'
    ];
}
