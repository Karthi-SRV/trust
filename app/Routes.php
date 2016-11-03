<?php
/**
 * Routes - all standard Routes are defined here.
 *
 * @author David Carr - dave@daveismyname.com
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */


/** Define static routes. */


//Authorize
Route::group(array('prefix' => '', 'namespace' => 'App\Controllers'), function() {
    // The Framework's Language Changer.
    Route::get('language/{code}', array('before' => 'referer', 'uses' => 'Language@change'));

    // The CRON runner.
    Route::get('cron/{token}', array('uses' => 'CronRunner@index'));

    // The default Auth Routes.
    Route::get( 'login',  array('before' => 'guest',      'uses' => 'Authorize@login'));
    Route::post('login',  array('before' => 'guest|csrf', 'uses' => 'Authorize@postLogin'));
    Route::get( 'logout', array('before' => 'auth',       'uses' => 'Authorize@logout'));

    // The Password Remind.
    Route::get( 'password/remind', array('before' => 'guest',      'uses' => 'Authorize@remind'));
    Route::post('password/remind', array('before' => 'guest|csrf', 'uses' => 'Authorize@postRemind'));

    // The Password Reset.
    Route::get( 'password/reset/{token?}', array('before' => 'guest',      'uses' => 'Authorize@reset'));
    Route::post('password/reset',          array('before' => 'guest|csrf', 'uses' => 'Authorize@postReset'));
});

// The Adminstration Routes.
Route::group(array('prefix' => 'admin', 'namespace' => 'App\Controllers\Admin'), function() {
    // The User's Dashboard.
    Route::get('/',         array('before' => 'auth', 'uses' => 'Dashboard@index'));
    Route::get('dashboard', array('before' => 'auth', 'uses' => 'Dashboard@index'));

    // The User's Profile.
    Route::get( 'profile', array('before' => 'auth',      'uses' => 'Profile@index'));
    Route::post('profile', array('before' => 'auth|csrf', 'uses' => 'Profile@update'));

    // The Site Settings.
    Route::get( 'settings', array('before' => 'auth',      'uses' => 'Settings@index'));
    Route::post('settings', array('before' => 'auth|csrf', 'uses' => 'Settings@store'));
});


Route::group(array('prefix' => '', 'namespace' => 'App\Controllers'), function() {
    // The Account Registration.
    Route::get( 'register',                 array('before' => 'guest',      'uses' => 'Registrar@create'));
    Route::post('register',                 array('before' => 'guest|csrf', 'uses' => 'Registrar@store'));
    Route::get( 'register/verify/{token?}', array('before' => 'guest',      'uses' => 'Registrar@verify'));
    Route::get( 'register/status',          array('before' => 'guest',      'uses' => 'Registrar@status'));
});

// The Adminstration Routes.
Route::group(array('prefix' => 'admin', 'namespace' => 'App\Controllers\Admin'), function() {
    // The Users CRUD.
    Route::get( 'users',              array('before' => 'auth',      'uses' => 'Users@index'));
    Route::get( 'users/create',       array('before' => 'auth',      'uses' => 'Users@create'));
    Route::post('users',              array('before' => 'auth|csrf', 'uses' => 'Users@store'));
    Route::get( 'users/{id}',         array('before' => 'auth',      'uses' => 'Users@show'));
    Route::get( 'users/{id}/edit',    array('before' => 'auth',      'uses' => 'Users@edit'));
    Route::post('users/{id}', 
            array('before' => 'auth|csrf', 'uses' => 'Users@update'));
    Route::post('users/{id}/destroy', array('before' => 'auth|csrf', 'uses' => 'Users@destroy'));

    // The Users Search.
    Route::post( 'users/search', array('before' => 'auth', 'uses' => 'Users@search'));

    // The Roles CRUD.
    Route::get( 'roles',              array('before' => 'auth',      'uses' => 'Roles@index'));
    Route::get( 'roles/create',       array('before' => 'auth',      'uses' => 'Roles@create'));
    Route::post('roles',              array('before' => 'auth|csrf', 'uses' => 'Roles@store'));
    Route::get( 'roles/{id}',         array('before' => 'auth',      'uses' => 'Roles@show'));
    Route::get( 'roles/{id}/edit',    array('before' => 'auth',      'uses' => 'Roles@edit'));
    Route::post('roles/{id}',         array('before' => 'auth|csrf', 'uses' => 'Roles@update'));
    Route::post('roles/{id}/destroy', array('before' => 'auth|csrf', 'uses' => 'Roles@destroy'));
});

// The Adminstration Routes.
Route::group(array('prefix' => 'admin', 'namespace' => 'App\Modules\Files\Controllers\Admin'), function() {
    Route::get('files',           array('before' => 'auth', 'uses' => 'Files@index'));
    Route::any('files/connector', array('before' => 'auth', 'uses' => 'Files@connector'));

    // Thumbnails Files serving.
    Route::get('files/thumbnails/{file}', array('before' => 'auth', 'uses' => 'Files@thumbnails'));

    // Preview Files serving.
    Route::get('files/preview/{path}', array('before' => 'auth', 'uses' => 'Files@preview'))->where('path', '(.*)');
});

// The default Routing
Route::get('/',       'App\Controllers\Welcome@index');
Route::get('subpage', 'App\Controllers\Welcome@subPage');

/** End default Routes */
