<?php

use Illuminate\Support\Facades\Storage;


if (!function_exists('dbString')) {
  function dbString($expression)
  {
    return base64_decode($expression);
  }
}

function installation()
    {
        if (Storage::disk('local')->exists(config('config.installation'))) {

            $install = json_decode(Storage::get(config('config.installation')));
            if ($install->application_installation === 'Completed') {
                return true;
            }

            return true;
        }

        return false;
    }
