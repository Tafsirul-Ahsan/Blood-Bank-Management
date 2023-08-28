<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminNotify extends Model
{
    public $table = "admin_notifies";
    protected $fillable = [
        'id',
       'notify'
    ];
}
