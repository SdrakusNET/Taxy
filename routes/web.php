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
/*
	    $config = array();
    $config['center'] = 'Defence Garden, Karachi';
    GMaps::initialize($config);
    $map = GMaps::create_map();

    echo $map['js'];
    echo $map['html'];
    */
    return view('welcome');
});

Route::get('/monitoreo', 'RutaTaxyController@index');
