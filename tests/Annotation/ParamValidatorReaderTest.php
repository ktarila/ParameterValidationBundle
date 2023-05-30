<?php

namespace ktarila\ParameterValidatorBundle\Tests\Annotation;

use ktarila\ParameterValidatorBundle\Tests\TestFunctions\TestFunctions;
use PHPUnit\Framework\TestCase;

class ParamValidatorReaderTest extends TestCase
{
    /** @test */
    public function validateFunctionParameters()
    {
        $testFunction = new TestFunctions();
        $errors = $testFunction->helloworld(40, 14);

        $this->assertEquals(0, $errors->count());
    }
}
