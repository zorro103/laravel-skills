<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Skill extends Model
{
    //

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function levels() {
        return $this->belongsToMany(Level::class, 'level_skill_user');
    }
}