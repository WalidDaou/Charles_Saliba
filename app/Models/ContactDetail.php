<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class ContactDetail extends Model
{
    use HasFactory;


    protected $table = 'contact_details';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'organization', 'position', 'subject', 'message'];

    public static function storeContact(array $data)
    {
        $validator = Validator::make($data, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required|string',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return ['success' => false, 'errors' => $validator->errors()];
        }

        self::create($validator->validated());

        return ['success' => true];
    }
}
