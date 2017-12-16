<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});



$app->get('api/siswa','SiswaController@index');

$app->get('api/siswa/{id}','SiswaController@getSiswa');

$app->post('api/siswa','SiswaController@saveSiswa');

$app->put('api/siswa/{id}','SiswaController@updateSiswa');

$app->delete('api/siswa/{id}','SiswaController@deleteSiswa');

