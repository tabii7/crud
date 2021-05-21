<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APImodel extends Model
{
    protected $table ='student';
    protected $filable = ['fname','email','address'];
}