<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use HasFactory;
    //     protected $table = 'products';
    protected $fillable = ['nama','storage','harga','foto'];
    // protected $guarded = ['id'];  
    use SoftDeletes;


}
