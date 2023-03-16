<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $guarded = ['id'];
jjjj
fadfav
    protected $hidden = ['deleted_at', 'extra'];
}
