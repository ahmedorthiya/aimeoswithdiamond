<?php

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
    return redirect('shop');
});

Route::get("/session-lists",function ()git
  // return \Illuminate\Support\Facades\Session::all();

    $client = new GuzzleHttp\Client();
    $res = $client->post('http://localhost:8000/jsonapi/basket?id=default&related=product&_token=JAjvHg5jeeiwR3LiFGpEo7Rox7j0dTHbf8DGn5nx',
        ['data'=>[['attributes',]]]);
});

Auth::routes();
