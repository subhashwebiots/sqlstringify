<?php

namespace SqlStringfy\StringCo;

use App\Helpers\Helpers;
use App\Http\Requests\ConfigurationRequest;
use App\Http\Requests\LicenseRequest;
use App\Process\Configuration;
use App\Process\Database;
use App\Process\License;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class Stco extends Controller
{
    public $configuration;

    public $license;

    public $database;

    public function __construct(Configuration $configuration, Database $database, License $license)
    {
        $this->license = $license;
        $this->database = $database;
        $this->configuration = $configuration;
    }

    public function loadPHPExtensions()
    {
        return view('install.requirements', [
            'configurations' => collect($this->configuration->getConfiguration())->collapse(),
            'configured' => $this->configuration->configured(),
        ]);
    }

    public function directories()
    {
        if (! $this->configuration->configured()) {
            return redirect()->route('install.requirements');
        }

        return view('install.directories', [
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

        return view('install.license', [
            'directories' => $this->configuration->checkWritableDir(),
            'configured' => $this->configuration->isDirConfigured(),
        ]);
    }

    public function licenseSetup(LicenseRequest $request)
    {
        $responseCode = $this->license->verify($request);

        if ($responseCode == Response::HTTP_OK) {
            return redirect()->route('install.database');
        }

        return back()->with('error', 'This Purchase Code Is Not Exists, Try Again');
    }

    public function databaseSetup()
    {
        if (! $this->configuration->configured()) {
            return redirect()->route('install.requirements');
        } elseif (! $this->configuration->isDirConfigured()) {
            return redirect()->route('install.directories');
        }

        return view('install.database');
    }

    public function configureDatabaseSetup(ConfigurationRequest $request)
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

        return view('install.completed');
    }
}
