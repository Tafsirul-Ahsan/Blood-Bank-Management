<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    public $table = "rewards";
    protected $fillable = [
        'id',
        'image',
        'image2',
        'name',
        'complete_camp',
        'rewards_earn',
        'reward_name',
    ];
}
