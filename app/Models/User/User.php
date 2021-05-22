<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $fillable = ['id', 'name','username','email','password', 'phone_number', 'photo',
        'verification_code','date_of_birth','role'];

    public $timestamps = false;
}
