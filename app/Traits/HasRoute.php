<?php

namespace App\Traits;

/**
 * @property $route
 */
trait HasRoute
{
    abstract public function getUrlAttribute();
}
