<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstProduct extends Model
{
    use HasFactory;
    protected $table = 'mstproduct';
    protected $primaryKey = 'prodcode';
    public $timestamps = false;
    protected $fillable = [
        'prodcode',
        'prodname',
        'content',
        'umbig',
        'umsmall'
    ];
}
