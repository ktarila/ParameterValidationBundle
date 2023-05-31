<?php

namespace ktarila\ParameterValidatorBundle\Tests\TestFunctions;

use ktarila\ParameterValidatorBundle\Attribute\ParamValidation;
use ktarila\ParameterValidatorBundle\Validator\Validation as ValidatorValidation;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Validation;

class TestFunctions
{
    #[ParamValidation(
        position: 0,
        constraint: [
            'class' => Range::class,
            'parameters' => ['min' => 10, 'max' => 50],
        ]
    )]
    #[ParamValidation(
        position: 1,
        constraint: [
            'class' => Range::class,
            'parameters' => ['min' => 10, 'max' => 20],
        ]
    )]
    public function helloworld(int $x, int $y)
    {
        $classMetadata = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator();

        $validation = new ValidatorValidation($classMetadata);

        return $validation->validate(__METHOD__, func_get_args());
    }
}
