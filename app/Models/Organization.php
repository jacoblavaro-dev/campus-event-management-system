<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = "organizations";
    protected $guarded = [];

    public function events()
    {
<<<<<<< HEAD
        return $this->hasMany(\App\Models\Event::class, 'organization_id');
    }

    // ADD THIS: Establish the relationship to the User table
    public function adviser()
    {
        return $this->belongsTo(\App\Models\User::class, 'adviser_id');
    }
}
=======
        return $this->hasMany('events', 'organization_id');
    }
}
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
