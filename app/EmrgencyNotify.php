<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmrgencyNotify extends Model
{
    public $table = "emrgency_notifies";
    protected $fillable = [
        'id',
        'user_id',
       'message'
    ];
    
}
