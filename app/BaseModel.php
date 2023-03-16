<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $guarded = ['id'];
kkkk
    protected $hidden = ['deleted_at', 'extra'];
}
