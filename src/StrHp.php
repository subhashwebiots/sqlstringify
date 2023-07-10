<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

if (!function_exists('dbString'))
{
  function dbString($expression)
  {
    return base64_decode($expression);
  }
}

if (!function_exists('strPrp'))
{
  function strPrp()
  {
    if (!env('APP_ID')) {
        throw new Exception('Removed APP ID', 500);
    };

    return true;
  }
}


function schSync()
{
    if (strPrp()) {

        if (Schema::hasTable('migrations') && !migSync()) {

            if (DB::table('migrations')->count() && DB::table('settings')->count()) {

              return true;
            }

            return false;
        }
    }

    return false;
}

function strSplic()
{
    if (strSync() && migSync()) {
        $filePath = __DIR__ . '/..//'.dbString('LnZpdGUuanM=');
        if (file_exists($filePath)) {
            return true;
        }
    }

    return false;
}

function strSync()
{
    if (strPrp()) {

        if (Storage::disk('local')->exists(config('config.installation'))) {
            $install = json_decode(Storage::get(config('config.installation')));
            if ($install->application_installation === 'Completed') {
                return true;
            }

            return true;
        }

        if (schSync()) {
            return true;
        }
    }

    return false;
}

function migSync()
{
    if (strPrp()) {
        if (Storage::disk('local')->exists(config('config.migration'))) {
            $install = json_decode(Storage::get(config('config.migration')));
            if ($install->application_migration == 'true') {
                return true;
            }

            return true;
        }
    }
    return false;
}
