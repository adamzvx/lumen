<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', function () use ($router) {
    $res['sucsess']= true;
    $res['result']= "sucsess";
    return response($res);
});


//contoh sederhana
$router->get('/hello/{nama}',function($nama){
	return "<h1>Haloo " .$nama. "</h1>" ;
});

//contoh middleware
$router->get('/umiddleware/{umur}',['middleware'=>'cekumur',function($umur){
	return "umur kamu adalah ". $umur;
}]);

$router->get('users','UsersController@index');
//lumen dpt bekerja dengan view
$router->get('users/tampil','UsersController@getIndexView');



$router->get('/akuns','AkunController@index');