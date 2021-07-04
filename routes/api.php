<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ChannelListController, ProgrammeController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'channels', 'middleware' => 'api.request.response.logger'], function(){
    Route::get('/', [ChannelListController::class, 'fetch']);
    Route::get('/{channel_uuid}/{date}/timezone/{timezone}', [ProgrammeController::class, 'getProgrammesChannel']);
    Route::get('/{channel_uuid}/programmes/{programme_uuid}', [ProgrammeController::class, 'getProgrammeInformation']);
});





