<?php

Route::get('/', function()
{
    $user = App::make('Champ\Account\UserEntityInterface');
    $user->find(1);

})->before('auth.basic');


Route::get('login', function(){

    $google = OAuth::consumer('Google');

    return Redirect::to((string)$google->getAuthorizationUri());

});