<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTesting extends Model
{
    use HasFactory;


    protected $table = 'contact_testings';

    protected $fillable = ['name', 'email', 'message'];
    
}
