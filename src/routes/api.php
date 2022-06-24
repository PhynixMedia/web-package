<?php

// Route::get('api/ios/call', function(){

//     $array = [];

//     for($start = 0; $start < 5; $start++){
//         $array[] = [
//             "title"             => "Staff, Not Slaves",
//             "date"              => "Monday October 26th 2020",
//             "memorize"          => "And, ye masters, do the same things unto them, forbearing threatening: knowing that your Masters also in heaven; neither is there respect of persons with him. Ephesians 6:9",
//             "biblePassage"      => "1 Now Naaman, captain of the host of the king of Syria, was a great man with his master, and honourable, because by him the Lord had given deliverance unto Syria: he was also a mighty man in valour, but he was a leper.",
//             "bibleReadingText"  => "Read: 2nd Kings 5:1-3 (KJV)",
//             "message"           => "Many people treat those who work for them – Personal Assistant, house keeper, gate-man, gardener and others as though they were a lower breed of humans.",
//             "keyPoint"          => "Your domestic staff and all those who work with you are fellow human beings and God cares for them. You should too.",
//             "hymns"             => "Hymn: Sing hymn 5",

//         ];
//     }

//     return json_encode($array, true);
// });

Route::group(['prefix' => 'api'], function() {

    Route::group(['prefix' => 'v1'], function() {
        
        Route::group(['prefix' => 'resources'], function()
        {
            Route::get('/topics', 'Website\Web\Controllers\Apps\ResourceController@topics');
            Route::get('/devotions', 'Website\Web\Controllers\Apps\ResourceController@devotions');
            Route::get('/topics/category', 'Website\Web\Controllers\Apps\ResourceController@category');
        });
        Route::group(['prefix' => 'accounts'], function()
        {
            Route::get('/get/user/{id}', 'Apps\AccountController@get');
            Route::post('/set/user', 'Apps\AccountController@store');
        });
        Route::group(['prefix' => 'stats'], function()
        {
            Route::post('/visits', 'Apps\VisitsController@store');
        });

    });

});