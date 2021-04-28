<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::get('discussions/{course_module_id}', 'DiscussionController@index')->name('discussions.index');
    Route::get('discussion-details/{course_module_id}/{discussion_id}', 'DiscussionController@show')->name('discussions.show');
    Route::get('discussions/{course_module_id}/create', 'DiscussionController@create')->name('discussions.create');
    Route::post('discussions', 'DiscussionController@store')->name('discussions.store');
    Route::post('discussion-comments', 'DiscussionController@storeCommentDiscussion')->name('discussion_comments.store');
    Route::get('change-discussion-status/{discussion_id}', 'DiscussionController@toggleStatusActive')->name('discussions.change_status');
    Route::get('download-file-discussion/{discussion_id}', 'DiscussionController@downloadFile')->name('discussion.download_file');
    Route::delete('discussions/{discussion_id}', 'DiscussionController@destroy')->name('discussions.destroy');
    Route::get('discussion/replay/{reply_id}','DiscussionController@reply')->name('discussions.reply');
