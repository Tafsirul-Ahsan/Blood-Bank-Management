<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodBankSearch extends Model
{
    public $table = "blood_bank_searches";
    protected $fillable = [
        'id',
        'image',
       'name',
       'address',
       'avilable',
       'contact',
       'blood_group',
    ];
    
}
