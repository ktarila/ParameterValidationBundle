<?php

namespace ktarila\ParameterValidatorBundle\Validator;

use Symfony\Component\Validator\ConstraintViolationList;

interface ValidationInterface
{
    public function validate(string $method, array $func_arguments): ConstraintViolationList;
}
