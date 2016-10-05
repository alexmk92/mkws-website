<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Traits\Roles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'admin'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    public function isAdministrator()
    {
        return $this->admin;
    }

    public function owns($relationship)
    {
        return $this->id == $relationship->user_id;
    }
}
