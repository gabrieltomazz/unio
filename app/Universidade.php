<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidade extends Model
{
    protected $fillable = ['nome'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'universidades';
}
