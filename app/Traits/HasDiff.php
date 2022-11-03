<?php

namespace App\Traits;

use Carbon\Carbon;

trait HasDiff
{

    public function getCreatedAttribute() {
        if ($this->created_at instanceof Carbon) {
            return $this->created_at->diffForHumans();
        }

        return 'unknown time ago';
    }

    public function getUpdatedAttribute() {
        if ($this->updated_at instanceof Carbon) {
            return $this->updated_at->diffForHumans();
        }

        return 'unknown time ago';
    }

}
