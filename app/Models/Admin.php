<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'email',
        'category_id',
        'tags',
    ];
}
