<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;

    
    protected $table = 'contact_details';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'organization', 'position', 'subject', 'message'];
}
