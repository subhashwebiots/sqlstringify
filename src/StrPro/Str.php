<?php

namespace Subhashwebiots\Sqlstringify\StrPro;

use Exception;
use Illuminate\Support\Facades\Http;

class Str
{
    public function verify($request)
    {
        try {

            $license = $request->all();
            if (strPrp()) {
                return Http::post('https://license.webiots.co.in/api/envato',[
                    'key' => trim($license['license']),
                    'envato_username' => $license['envato_username'],
                    'domain' => str_replace("install/verify", "", url()->current()),
                    'project_id' => env('APP_ID')
                ]);
            }

        } catch (Exception $e) {

            throw $e;
        }
    }
}
