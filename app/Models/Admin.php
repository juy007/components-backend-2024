<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = ['id', 'name', 'email', 'email_verified_at', 'password', 'role', 'remember_token', 'created_at', 'updated_at'];
    
}
