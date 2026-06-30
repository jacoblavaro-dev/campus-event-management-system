<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
<<<<<<< HEAD
=======
use Database\Factories\UserFactory;
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

<<<<<<< HEAD
#[Fillable(['name', 'email', 'password', 'fname', 'lname', 'contact_number', 'birthdate', 'address', 'profile_photo', 'role'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
=======
#[Fillable(['name', 'email', 'password', 'fname', 'lname', 'contact_number', 'birthdate', 'address'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getMemberSinceAttribute()
    {
<<<<<<< HEAD
        $created_at = $this->created_at; 
=======
        $created_at = $this->created_at;
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
        return Carbon::parse($created_at)->format('M Y');
    }

    public function getDisplayPhotoAttribute()
    {
        $photo = $this->profile_photo;
        $fullname = $this->fname . ' ' . $this->lname;

        if($photo) {
            return url('storage/' . $photo);
        }

<<<<<<< HEAD
        return 'https://ui-avatars.com/api/?name=' . urlencode(trim($fullname));
    }

    public function getFullnameAttribute()
=======
        return 'https://ui-avatars.com/api/?name=' . $fullname;
    }

    public function getFullNameAttribute()
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
    {
        if($this->fname && $this->lname) {
            return $this->fname . ' ' . $this->lname;
        }
<<<<<<< HEAD
=======

>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
        return $this->name;
    }

    public function getDisplayBirthdateAttribute()
    {
        if($this->birthdate) {
            return Carbon::parse($this->birthdate)->format('F d, Y');
        }
<<<<<<< HEAD
        
        return '';
    }

    // --- NEW HELPER METHODS ---

    public function isAdmin(): bool
    {
        return strtolower($this->role) === 'admin';
    }

    public function isUser(): bool
    {
        return strtolower($this->role) === 'user';
    }
}
=======

        return '';
    }
}
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
