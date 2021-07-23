<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'title',
        'description',
        'link'
    ];
}
