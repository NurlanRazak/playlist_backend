<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{

    protected $table = 'years';
    protected $guarded = ['id'];
    protected $fillable = ['year'];
    public $timestamps = true;
}
