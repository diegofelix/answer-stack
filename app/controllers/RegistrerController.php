<?php

use Champ\Account\UserEntityInterface;

class RegistrerController extends BaseController {
	
	/**
	 * User Entity
	 * 
	 * Champ\Account\UserEntityInterface
	 */
	protected $user;

	public function __construct(UserEntityInterface $userEntity)
	{
		$this->entity = $userEntity;
	}

	/**
	 * Show a register form
	 * 
	 * @return Response
	 */
	public function index()
	{
		return View::make('account.registrer');
	}

}