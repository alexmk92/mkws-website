<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    
    public function grantPermission(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }

    public function revokePermission(Permission $permission)
    {
        return $this->permissions()->detach($permission);
    }
}
