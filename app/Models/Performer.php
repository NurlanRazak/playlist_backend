<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{

    protected $table = 'performers';
    protected $guarded = ['id'];
    protected $fillable = ['name', 'song', 'genre_id', 'year_id'];
    public $timestamps = true;

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function year()
    {
        return $this->belongsTo(Year::class, 'year_id');
    }
}
