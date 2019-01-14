<?php

Route::group(['namespace'=>'Keshab\SendEmail\Http\Controllers','middleware'=>'web'],function (){

    Route::get('sendemail','SendEmailController@index')->name('send-email');

    Route::post('sendemail','SendEmailController@send');

});
