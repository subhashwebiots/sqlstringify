<?php
Route::group(['middleware' => ['installation', 'prevent_back']], function () {

  Route::prefix('install')->group(function () {

      Route::get('requirements', 'InstallController@loadPHPExtensions')->name('install.requirements');
      Route::get('directories', 'InstallController@directories')->name('install.directories');
      Route::get('database', 'InstallController@databaseSetup')->name('install.database');
      Route::get('license', 'InstallController@license')->name('install.license');
      Route::post('license', 'InstallController@licenseSetup')->name('install.license.setup');
      Route::post('database', 'InstallController@configureDatabaseSetup')->name('install.database.config');
      Route::get('completed', 'InstallController@completed')->name('install.completed');
  });
});
