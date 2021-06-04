<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInformations extends Model
{
    use HasFactory;
    protected $table = "contact_information";
    protected $fillable = ['id', 'name','user_id','country','city','about','phone_number', 'facebook',
        'twitter','linkedin','experience'];

    public $timestamps = false;
}
