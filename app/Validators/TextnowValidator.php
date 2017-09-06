<?php

namespace Someline\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class TextnowValidator extends LaravelValidator
{

    protected $rules = [
      ValidatorInterface::RULE_CREATE => [
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required',
      ],
        ValidatorInterface::RULE_UPDATE => [],
   ];
}
