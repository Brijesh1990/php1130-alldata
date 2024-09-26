<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddProducts extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'category_id',
        'subcategory_id',
        'photo',
        'productname',
        'oldprice',
        'newprice',
        'qty',
        'descriptions'
    ];

    protected $table='products';
}
