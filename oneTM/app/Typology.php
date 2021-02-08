<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    protected $fillable = [
        'name',
        'descr'
    ];

    public function tasks() {
        return $this -> belongsToMany(Task::class);
    }
}
