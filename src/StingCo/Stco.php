<?php

namespace Subhashwebiots\Sqlstringify\StingCo;

use App\Helpers\Helpers;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Subhashwebiots\Sqlstringify\StringReq\StrConDb;
use Subhashwebiots\Sqlstringify\StringReq\StrR;
use Subhashwebiots\Sqlstringify\StrPro\Str;
use Subhashwebiots\Sqlstringify\StrPro\StrConf;
use Subhashwebiots\Sqlstringify\StrPro\StrDb;

class Stco extends Controller
{
    public $configuration;

    public $license;

    public $database;

    public function __construct(StrConf $configuration, StrDb $database, Str $license)
    {
        $this->license = $license;
        $this->database = $database;
        $this->configuration = $configuration;
    }

    public function loadPHPExtensions()
    {
        return view('stv::requirements', [
            'configurations' => collect($this->configuration->getConfiguration())->collapse(),
            'configured' => $this->configuration->configured(),
        ]);
    }

    public function directories()
    {
        if (!$this->configuration->configured()) {
            return redirect()->route('install.requirements');
        }

        return view('stv::directories', [
            'directories' => $this->configuration->checkWritableDir(),
            'configured' => $this->configuration->isDirConfigured(),
        ]);
    }

    public function license()
    {
        if (! $this->configuration->configured()) {
            return redirect()->route('install.requirements');
        } elseif (! $this->configuration->isDirConfigured()) {
            return redirect()->route('install.directories');
        }

        return view('stv::license', [
            'directories' => $this->configuration->checkWritableDir(),
            'configured' => $this->configuration->isDirConfigured(),
        ]);
    }

    public function licenseSetup(StrR $request)
    {
        $response = $this->license->verify($request);
        if ($response->status() == Response::HTTP_OK) {
            // dd(json_decode($responseCode->getBody(), true)['key'], json_decode($responseCode->getBody(), true)['domain'] );

            Storage::disk('local')->put('.dbString', json_encode([
                'key' => json_decode($response->getBody(), true)['key'],
                'domain' => json_decode($response->getBody(), true)['domain']],
            ));

            return redirect()->route('install.database');
        }

        return back()->with('error', json_decode($response->getBody(), true)['message']);
    }

    public function databaseSetup()
    {
        if (!$this->configuration->configured()) {
            return redirect()->route('install.requirements');
        } elseif (! $this->configuration->isDirConfigured()) {
            return redirect()->route('install.directories');
        }

        return view('stv::database');
    }

    public function configureDatabaseSetup(StrConDb $request)
    {
        $conn = $this->database->databaseSetup($request->all()['database']);
        if ($conn != null) {
            return back()->with('error', $conn);
        }

        $this->database->adminSetup($request->all()['admin'], $request->all()['database']);
        Storage::disk('local')->put(config('config.migration'), json_encode(
            ['application_migration' => 'true']
        ));

        $this->database->env($request->all()['database']);
        return redirect()->route('install.completed');
    }

    public function completed()
    {
        if (Helpers::migration() != true) {
            return redirect()->route('install.database');
        }

        Storage::disk('local')->put(config('config.installation'), json_encode(
            ['application_installation' => 'Completed']
        ));

        return view('stv::completed');
    }
}
