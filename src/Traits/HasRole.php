<?php

namespace Adambarfi\rbac;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRole
{
    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @param  int|string  $role
     * @return bool
     */
    public function hasRole(int|string $role): bool
    {
        $roles = $this->roles();

        is_int($role) ? $roles->where('id', $role) : $roles->where('name', $role);

        return $roles->exists();
    }

}
