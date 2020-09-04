<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{

    protected $table = 'performers';
    protected $guarded = ['id'];
    protected $fillable = ['name', 'song'];
    public $timestamps = true;


}
