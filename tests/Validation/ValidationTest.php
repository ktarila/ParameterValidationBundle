<?php

namespace ktarila\ParameterValidatorBundle\Tests\Validation;

use ktarila\ParameterValidatorBundle\Tests\TestFunctions\TestFunctions;
use PHPUnit\Framework\TestCase;

class ValidationTest extends TestCase
{
    /** @test */
    public function validateFunctionParameters()
    {
        $testFunction = new TestFunctions();
        $errors = $testFunction->helloworld(40, 14);

        $this->assertEquals(0, $errors->count());
    }
}
