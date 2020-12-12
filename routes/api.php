<?php
/*
 * @Description: 
 * @Author: Lewis
 * @Date: 2020-12-09 00:28:16
 * @LastEditTime: 2020-12-11 22:42:06
 * @LastEditors: Lewis
 */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post("login","AuthController@login");
Route::post("register","AuthController@register");
Route::group(["middleware"=>"auth.jwt"],function(){
    Route::get("logout","AuthController@logout");
    Route::resource("tasks", "TaskController");
});