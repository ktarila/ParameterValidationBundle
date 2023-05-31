# Symfony Method Parameter Validation Bundle

A symfony Bundle that validates method parameters
using the symfony constraint validator class.

Validations are added as PHP8 attributes

Work In Progress

## Installation

```
composer require ktarila/parameter-validator-bundle

```

## Usage

```
<?php

use ktarila\ParameterValidatorBundle\Validator\ValidationInterface;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Exception\ValidationFailedException;
use ktarila\ParameterValidatorBundle\Attribute\ParamValidation;

class TestClass
{
    public function __construct(
        private ValidationInterface $validationInterface
    ) {
    }

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
    public function addTwoNumbers(int $x, int $y)
    {
        $errors = $this->validationInterface->validate(
            __METHOD__,
            func_get_args()
        );

        if ($errors->count() === 0) {
            return $x + $y;
        }

        throw new ValidationFailedException([$x, $y], $errors);
    }
}

```
