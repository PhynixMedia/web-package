<?php

Route::group(['middleware' => 'web'], function ()
{

    Route::group(['prefix' => 'appointment'], function ()
    {
        Route::get('/', 'Web\App\Controllers\AppointmentsController@index')->name('appointment.index');
        Route::post('/store', 'Web\App\Controllers\AppointmentsController@store')->name('appointment.store');
    });

    Route::group(['prefix' => 'callback'], function ()
    {
        Route::get('/', 'Web\App\Controllers\CallBackController@index')->name('callback.index');
        Route::post('/store', 'Web\App\Controllers\CallBackController@store')->name('callback.store');

    });

    Route::group(['prefix' => 'contact'], function ()
    {
        Route::get('/', 'Web\App\Controllers\ContactsController@index')->name('contact.index');
        Route::post('/store', 'Web\App\Controllers\ContactsController@store')->name('contact.store');

    });

    Route::group(['prefix' => 'feedback'], function ()
    {
        Route::get('/', 'Web\App\Controllers\FeedBacksController@index')->name('feedback.index');
        Route::post('/store', 'Web\App\Controllers\FeedBacksController@store')->name('feedback.store');

    });

    Route::group(['prefix' => 'newsletter'], function ()
    {
        Route::get('/', 'Web\App\Controllers\NewslettersController@index')->name('newsletter.index');
        Route::post('/store', 'Web\App\Controllers\NewslettersController@store')->name('newsletter.store');

    });

    Route::group(['prefix' => 'quote'], function ()
    {
        Route::get('/', 'Web\App\Controllers\QuotesController@index')->name('quote.index');
        Route::post('/store', 'Web\App\Controllers\QuotesController@store')->name('quote.store');

    });
    /**
     *      GENERAL WEB ROUTES                                      */
    Route::get('/', 'Web\App\Controllers\IndexController@index');
    Route::get('/{page}/{sub?}', 'Web\App\Controllers\IndexController@index');
    Route::get('/{page}/{sub?}/{extra?}', 'Web\App\Controllers\IndexController@index');
});

