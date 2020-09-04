<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    //variables
    protected $table = 'performers';
    protected $guarded = ['id'];
    protected $fillable = ['name'];
    public $timestamps = true;


}
