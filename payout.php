
<?php
Route::get('/',function(){
return view('welcome');
});

Route::get('complain','payment@complain');

Route::post('createRequest','payment@createRequest')
?>