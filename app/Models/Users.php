<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UsersController;



class Users extends Model
{
    use HasFactory;

   protected $fillable =['UserName','Password','FirstName','LastName'];
}
