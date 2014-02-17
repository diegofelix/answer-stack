<?php

use Champ\Account\UserEntity;

class RegisterController extends BaseController {

    /**
     * User Entity
     *
     * @var Champ\Account\UserEntity
     */
    protected $user;

    public function __construct(UserEntity $user)
    {
        $this->user = $user;
    }

    /**
     * Show the registration form
     *
     * @return Response
     */
    public function index()
    {
        return View::make('users.register');
    }

}