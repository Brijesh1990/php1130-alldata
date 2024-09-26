<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddBlogs extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "title","photo","added_date","descriptions"
    ];
    protected $table='addblogs';
}
