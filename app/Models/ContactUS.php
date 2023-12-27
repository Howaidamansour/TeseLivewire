<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    use HasFactory;
    protected $table = "contact_u_s" ; 
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message'
    ] ;

}
