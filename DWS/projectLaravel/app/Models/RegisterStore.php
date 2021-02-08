<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterStore extends Model
{
    protected $table = 'usuarios';
    public $timestamps = true;
    protected $fillable = [
      'name', 'lname', 'email', 'nick', 'pass', 'cpass', 'bloguer'
    ];
}
