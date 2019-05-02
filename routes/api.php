<?php

Route::apiResource('/question','QuestionController');
Route::apiResource('/category','CategoryController');
Route::apiResource('/question/{question}/reply','replyController');
Route::post('/like/{reply}','LikeController@likeIt');
Route::delete('/like/{reply}','LikeController@unLikeIt');
 
Route::post('/notification','NewReplyNotification@index');
// Route::post('notification', function () {
//     return [
//         'read' => auth()->user()->readNotifications(),
//         'unread' => auth()->user()->unreadNotifications()
//     ];
// });

Route::group([

    'middleware'=> 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    

});




