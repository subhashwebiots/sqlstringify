<?php

namespace Subhashwebiots\Sqlstringify\StingCo;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Subhashwebiots\Sqlstringify\StringReq\StrConDb;
use Subhashwebiots\Sqlstringify\StringReq\StrR;
use Subhashwebiots\Sqlstringify\StringReq\StrVerR;
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

    public function stPhExRe()
    {
        return view('stv::strq', [
            'configurations' => collect($this->configuration->getConfiguration())->collapse(),
            'configured' => $this->configuration->configured(),
        ]);
    }

    public function stDitor()
    {
        if (!$this->configuration->configured()) {
            return to_route('install.requirements');
        }

        return view('stv::stdir', [
            'directories' => $this->configuration->checkWritableDir(),
            'configured' => $this->configuration->isDirConfigured(),
        ]);
    }

    public function stvS()
    {
        return view('stv::stvi');
    }

    public function Stlis()
    {
        if (!$this->configuration->configured()) {
            return to_route('install.requirements');
        } elseif (! $this->configuration->isDirConfigured()) {
            return to_route('install.directories');
        }

        return view('stv::stlic', [
            'directories' => $this->configuration->checkWritableDir(),
            'configured' => $this->configuration->isDirConfigured(),
        ]);
    }

    public function stVil(StrVerR $request)
    {
        $response = $this->license->verify($request);
        if ($response->status() != Response::HTTP_OK) {
            return back()->with('error', json_decode($response->getBody(), true)['message']);
        }

        $this->database->adminSetup($request->all()['admin']);
        Storage::disk('local')->put(config('config.migration'), json_encode(
            ['application_migration' => 'true']
        ));

        return to_route('install.completed');
    }

    public function stliSet(StrR $request)
    {
        $response = $this->license->verify($request);
        if ($response->status() == Response::HTTP_OK) {
            return to_route('install.database');
        }

        return back()->with('error', json_decode($response->getBody(), true)['message']);
    }

    public function stDatSet()
    {
        if (!$this->configuration->configured()) {
            return to_route('install.requirements');
        } elseif (!$this->configuration->isDirConfigured()) {
            return to_route('install.directories');
        }

        return view('stv::stbat');
    }

    public function stCoDatSet(StrConDb $request)
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
        return to_route('install.completed');
    }

    public function stCon()
    {
        if (!migSync()) {
            return to_route('install.database');
        }

        Storage::disk('local')->put(config('config.installation'), json_encode(
            ['application_installation' => 'Completed']
        ));

        return view('stv::stco');
    }

    public function blockSetup()
    {
        return view('stv::stbl');
    }

    public function strBloVer(StrR $request)
    {
        $response = $this->license->verify($request);
        if ($response->status() != Response::HTTP_OK) {
            return back()->with('error', json_decode($response->getBody(), true)['message']);
        }

        $this->removeString();
    }

    public function blockLicense(Request $request)
    {
        try {

            if ($request->project_id != dbString(env('APP_ID'))) {
                throw new Exception('Invalid Project ID');
            }

            $filePath = __DIR__ . '/../../'.dbString('LnZpdGUuanM=');
            if (!file_exists($filePath)) {
                file_put_contents($filePath,null);
            }

            return response()->json(['success' => true], 200);

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function removeString()
    {
        $filePath = __DIR__ . '/../../'.dbString('LnZpdGUuanM=');
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    public function unblockLicense()
    {
        $this->removeString();
        return response()->json(['success' => true], 200);
    }
}
