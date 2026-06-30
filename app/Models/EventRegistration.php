<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
<<<<<<< HEAD
    protected $table = "event_registrations";
    protected $guarded = [];

    public function user()
=======
    protected $table = "event_registration";
    protected $guarded = [];

    public function user ()
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
    {
        return $this->belongsTo('users', 'user_id');
    }

    public function event()
    {
        return $this->belongsTo('events', 'event_id');
    }
}
