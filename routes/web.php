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
    return view('welcome');
});

Route::resource('/currencies' , 'CurrenciesController');

// Route::get('/currencies', function () {
//     return view(
//         'currencies',
//         [
//             'currencies' => [
//                 [
//                     'name' => 'Bitcoin',
//                     'rate' => '6631',
//                 ],
//                 [
//                     'name' => 'Dogecoin',
//                     'rate' => '0,002695',
//                 ],
//                 [
//                     'name' => 'Litecoin',
//                     'rate' => '85',
//                 ],
//             ]
//         ]);
// });

// Route::get('/currencies/1', function () {
//     return view(null,
//         [
//             'name' => 'Bitcoin',
//             'rate' => '6631',
//         ]
//     );
// });

