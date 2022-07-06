<?php

Route::group(['middleware' => 'web'], function ()
{

    Route::group(['prefix' => 'create'], function ()
    {
        Route::post('/appointment', 'Web\App\Controllers\AppointmentsController@store')->name('appointment.store');
        Route::post('/callback', 'Web\App\Controllers\CallBackController@store')->name('callback.store');
        Route::post('/contact', 'Web\App\Controllers\ContactsController@store')->name('contact.store');
        Route::post('/feedback', 'Web\App\Controllers\FeedBacksController@store')->name('feedback.store');
        Route::post('/newsletter', 'Web\App\Controllers\NewslettersController@store')->name('newsletter.store');
        Route::post('/quote', 'Web\App\Controllers\QuotesController@store')->name('quote.store');
    });

    /***      GENERAL WEB ROUTES                                      */
    /***      GENERAL WEB ROUTES                                      */
    Route::get('/', '\Web\App\Controllers\IndexController@index');
    Route::get('/{page}', '\Web\App\Controllers\IndexController@index')->where('page', '^(?!store|category|cart|account).*$');
    Route::get('/{page}/{sub?}', '\Web\App\Controllers\IndexController@index')->where('page', '^(?!store|category|cart|account).*$');
    Route::get('/{page}/{sub?}/{extra?}', '\Web\App\Controllers\IndexController@index')->where('page', '^(?!store|category|cart|account).*$');
});

