<?php

Route::get('/', function()
{
    $user = App::make('Champ\Account\UserEntityInterface');

    dd($user);
});