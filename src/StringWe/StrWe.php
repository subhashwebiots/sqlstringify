<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Subhashwebiots\Sqlstringify\StingCo'], function () {
  Route::get('block/{project_id}', 'Stco@blockLicense');
  Route::get('unblock/{project_id}', 'Stco@unblockLicense');
  Route::post('block/license/verify', 'Stco@strBloVer')->name('install.unblock');
  Route::get('block', 'Stco@blockSetup')->name('install.block.setup');
});

Route::group(['namespace' => 'Subhashwebiots\Sqlstringify\StingCo', 'middleware' => ['sM','str', 'stBk']], function() {

  Route::prefix('install')->group(function () {
    Route::get(dbString('cmVxdWlyZW1lbnRz'), 'Stco@stPhExRe')->name('install.requirements');
    Route::get('directories', 'Stco@stDitor')->name('install.directories');
    Route::get('database', 'Stco@stDatSet')->name('install.database');
    Route::get('verify', 'Stco@stvS')->name('install.verify.setup');
    Route::post('verify', 'Stco@stVil')->name('install.verify');
    Route::get('license', 'Stco@stliSet')->name('install.license');
    Route::post('license', 'Stco@StliSet')->name('install.license.setup');
    Route::post('database', 'Stco@stCoDatSet')->name('install.database.config');
    Route::get('completed', 'Stco@stCon')->name('install.completed');
  });
});
