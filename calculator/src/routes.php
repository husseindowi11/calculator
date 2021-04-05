<?php

Route::get('calculator', function(){
    echo 'Hello from the dowi package!';
});


Route::get('add/{a}/{b}', 'Dowi\Calculator\CalculatorController@add');

Route::get('subtract/{a}/{b}', 'Dowi\Calculator\CalculatorController@subtract');
