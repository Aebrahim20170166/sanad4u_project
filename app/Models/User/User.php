<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = "user";
    protected $fillable = ['id','username','email','password','photo', 'verification_code','role'];

    public $timestamps = false;
}
