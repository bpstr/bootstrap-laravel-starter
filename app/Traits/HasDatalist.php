<?php

namespace App\Traits;

/**
 * @property $id
 * @property $name
 */
trait HasDatalist
{
    public function getDatalistAttribute()
    {
        return sprintf('%d » %s', $this->id, $this->name);
    }
}
