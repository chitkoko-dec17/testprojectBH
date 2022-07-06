<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Employee extends Model
{
	use HasApiTokens;

    protected $fillable = [
        'name', 'age', 'job', 'salary'
    ];
}