<?php

namespace Adambarfi\Rbac;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Adambarfi\Rbac\Skeleton\SkeletonClass
 */
class RbacFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rbac';
    }
}
