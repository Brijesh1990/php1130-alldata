<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Mail;
use App\Mail\ContactMail;

class ContactModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        "name","email","subject","phone","message"
    ];
    protected $table="contacts";

    // create a method to send email
    public static function boot()
    {
        parent::boot();

        static::created(function($data){
            $customerEmail="brijeshpandey.tops@gmail.com";
            Mail::to($customerEmail)->send(new ContactMail($data));

        });
    }
}
