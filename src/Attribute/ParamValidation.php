<?php

namespace ktarila\ParameterValidatorBundle\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_FUNCTION)]
class ParamValidation
{
    /**
     * Initalize a function. Constraint should pass parameters that can
     * be used to create the Symfony constraint class. For example
     * constraint: [
     *      'class' => Range::class,
     *       'parameters' => ['min' => 10, 'max' => 20],
     *  ].
     *
     * @param int   $position   postion of argument in function, starting from zero
     * @param array $constraint Symfony Constraint class and parameters
     */
    public function __construct(
        public int $position, /* Position of argument in function */
        public array $constraint, /* Symfony constraint class and parameters */
    ) {
    }
}
