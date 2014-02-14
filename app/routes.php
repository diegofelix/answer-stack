<?php

Route::get('/', function()
{
    $user = App::make('Champ\Account\UserEntityInterface');
    $user->find(1);

})->before('auth.basic');