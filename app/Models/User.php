<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    ### Relations
    // public function notificationFrom()
    // {
    //     return $this->hasMany(   Notification::class, 'from_user_id');
    // }

    // public function notificationTo()
    // {
    //     return $this->hasMany(Notification::class, 'to_user_id');
    // }

    // public function ScopeCountNotIsSeen($query)
    // {
    //     // return $query->get();
    //     $query->whereHas('notificationTo',function ($query)
    //     {
    //         return $query->where('is_seen',-1)->get();
    //     });
    // }
}

