<?php

namespace Subhashwebiots\Sqlstringify\StrPro;

use Illuminate\Support\Facades\Http;

class Str
{
    public function verify($request)
    {
        $license = $request->all();
        return Http::post('https://license.webiots.co.in/api/envato',[
            'key' => trim($license['license']),
            'domain' => url()->current()
        ]);
    }
}
