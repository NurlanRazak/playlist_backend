<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    protected $table = 'genres';
    protected $guarded = ['id'];
    protected $fillable = ['name'];
    public $timestamps = true;

}
