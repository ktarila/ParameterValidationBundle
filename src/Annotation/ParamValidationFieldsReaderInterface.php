<?php

namespace ktarila\ParameterValidatorBundle\Annotation;

use Symfony\Component\Validator\ConstraintViolationList;

interface ParamValidationFieldsReaderInterface
{
    public function validate(string $method, array $func_arguments): ConstraintViolationList;
}
