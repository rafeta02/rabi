<?php
Route::get('/', 'HomeController@index')->name('front');
Route::get('to/{tamu?}', 'HomeController@index')->name('front');

Route::post('ucapan', 'HomeController@ucapan')->name('ucapan');

Route::post('ucapan', 'HomeController@ucapan')->name('ucapan');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Guestbook
    Route::delete('guestbooks/destroy', 'GuestbookController@massDestroy')->name('guestbooks.massDestroy');
    Route::resource('guestbooks', 'GuestbookController');

    // Guest
    Route::delete('guests/destroy', 'GuestController@massDestroy')->name('guests.massDestroy');
    Route::post('guests/import', 'GuestController@import')->name('guests.import');
    Route::get('guests/export', 'GuestController@export')->name('guests.export');
    Route::post('guests/parse-csv-import', 'GuestController@parseCsvImport')->name('guests.parseCsvImport');
    Route::post('guests/process-csv-import', 'GuestController@processCsvImport')->name('guests.processCsvImport');
    Route::resource('guests', 'GuestController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
