<?php

use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;

Route::group(['namespace' => 'Subhashwebiots\Sqlstringify\StingCo', 'middleware' => ['installation', 'prevent_back',StartSession::class,
ShareErrorsFromSession::class]], function () {

  Route::prefix('install')->group(function () {
      Route::get('requirements', 'Stco@loadPHPExtensions')->name('install.requirements');
      Route::get('directories', 'Stco@directories')->name('install.directories');
      Route::get('database', 'Stco@databaseSetup')->name('install.database');
      Route::get('license', 'Stco@license')->name('install.license');
      Route::post('license', 'Stco@licenseSetup')->name('install.license.setup');
      Route::post('database', 'Stco@configureDatabaseSetup')->name('install.database.config');
      Route::get('completed', 'Stco@completed')->name('install.completed');
  });
});
