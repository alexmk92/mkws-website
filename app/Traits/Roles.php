<?php

namespace App\Traits;

use App\Role;

trait Roles
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // $user->hasRole('manager');
    public function hasRole($role)
    {
        if(is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        // intersection methods returns all that match - this is the same as the foreach below
        // we use !! to convert it to a boolean by NOTing twice
        return !! $role->intersect($this->roles)->count();

        /*
        foreach($role as $r) {
            if($this->hasRole($r->name)) {
                return true;
            }
        }
        return false;
        */
    }

    public function assignRole($role)
    {
        if(is_string($role)) {
            return $this->roles()->save(
                Role::whereName($role)->firstOrFail()
            );
        }
        return $this->roles()->save($role);
    }

    public function removeRole($role)
    {
        if(is_string($role)) {
            return $this->roles()->detach(
                Role::whereName($role)->firstOrFail()
            );
        }
        return $this->roles()->detach($role);
    }
}