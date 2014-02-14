<?php namespace Champ\Account;

use Champ\Core\Validation\AbstractValidator;
use Champ\Core\Validation\ValidableInterface;

class UserValidator extends AbstractValidator implements ValidableInterface {

    protected $rules = [
        'create' => [
            'name' => 'required'
        ]
    ];

}