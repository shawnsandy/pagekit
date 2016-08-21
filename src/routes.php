<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/16
 * Time: 10:02 AM
 *
 */

Route::group( ['prefix' => 'page','middleware' => ['web'] ], function () {

    Route::get('', function(){
        return view('page::index');
    });

    Route::get('{name}', function ($name) {

        $token = null;
        if($name == 'login-reset')
            $token = hash_hmac('sha256', str_random(40), config('app.key'));

        return view('page::'.$name, compact('token'));
    });

});

Route::group(['prefix' => 'dashboard', 'middleware' => 'web'], function(){

    Route::get('', function(){
        return view('page::admin.dashboard');
    });

    Route::get('{name}', function($name){
        return view('page::admin.'. $name);
    });

});
