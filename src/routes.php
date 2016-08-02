<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/16
 * Time: 10:02 AM
 */

Route::group(['prefix' => 'page'], function(){

    Route::get('', function(){
        return view('page::index');
    });

    Route::get('{name}', function($name){
        return view('page::'.$name);
    });
});
