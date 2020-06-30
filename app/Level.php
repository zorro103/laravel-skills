<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User; 

class Level extends Model
{
    //
    public function users() {
        return $this->belongsToMany(User::class, 'level_skill_user');
    }

    public function skills() {
        return $this->belongsToMany(Skill::class, 'level_skill_user');
    }
}
