<?php

namespace Subhashwebiots\Sqlstringify\StrPro;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/**
 * Database configuration
 */
class StrDb
{
    public function databaseSetup($database)
    {
        $this->databaseConfiguration($database);
        try {

            $this->sqliSetup($database);
            Artisan::call('migrate:fresh');
            Artisan::call('db:seed');

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function sqliSetup($database)
    {
        new \mysqli($database['DB_HOST'], $database['DB_USERNAME'],
                $database['DB_PASSWORD'], $database['DB_DATABASE'],
                $database['DB_PORT']);
    }

    public function databaseConfiguration($database)
    {
        config([
            'database.default' => 'mysql',
            'database.connections.mysql.host' => $database['DB_HOST'],
            'database.connections.mysql.port' => $database['DB_PORT'],
            'database.connections.mysql.database' => $database['DB_DATABASE'],
            'database.connections.mysql.username' => $database['DB_USERNAME'],
            'database.connections.mysql.password' => $database['DB_PASSWORD'],
        ]);

        DB::purge('mysql');
        Artisan::call('config:clear');
    }

    public function adminSetup($admin, $database)
    {
        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo(Permission::all());
        $user = User::factory()->create([
            'name' => $admin['first_name'].''.$admin['last_name'],
            'email' => $admin['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($admin['password']),
            'remember_token' => Str::random(10),
        ]);

        $user->assignRole($role);
        $this->databaseConfiguration($database);

        $this->sqliSetup($database);
        $sql = File::get(public_path('chatloop.sql'));
        DB::unprepared($sql);
    }

    public function env($database)
    {
        DotenvEditor::setKeys([
            'DB_HOST' => $database['DB_HOST'],
            'DB_PORT' => $database['DB_PORT'],
            'DB_DATABASE' => $database['DB_DATABASE'],
            'DB_USERNAME' => $database['DB_USERNAME'],
            'DB_PASSWORD' => $database['DB_PASSWORD'],
        ]);

        DotenvEditor::save();
    }
}
