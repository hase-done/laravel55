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



Route::get('cards', 'CardsController@index');

Route::get('cards/add', 'CardsController@add');
Route::post('cards/add', 'CardsController@create');

Route::get('cards/show/{id}', 'CardsController@show');

Route::get('cards/edit/{id}', 'CardsController@edit');
Route::post('cards/edit/{id}', 'CardsController@update');

Route::get('cards/del/{id}', 'CardsController@del');
Route::post('cards/del/{id}', 'CardsController@remove');


// ?つければ無くても大丈夫なパターン この場合だと0になる
Route::get('hello/{id?}/{pass?}', 'HelloController@index');



Route::get('hello1', function () {
    return '<html><body>hello1</body></html>';
});



Route::get('hello2', function () {
    return 'hello2';
});



$html = <<<EOF
<html>
<body>
hello3
</body>
</html>
EOF;
Route::get('hello3', function () use ($html) {
    return $html;
});



Route::get('hello4/{msg}/{id}', function ($msg, $id) {
  $html = <<<EOF
  <html>
  <body>
  hello4 {$msg} {$id}
  </body>
  </html>
EOF;
    return $html;
});


// ?つければ無くても大丈夫なパターン この場合だと0になる
Route::get('hello5/{msg}/{id?}', function ($msg, $id=0) {
  $html = <<<EOF
  <html>
  <body>
  hello4 {$msg} {$id}
  </body>
  </html>
EOF;
    return $html;
});
