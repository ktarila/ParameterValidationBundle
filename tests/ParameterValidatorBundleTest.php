<?php

namespace ktarila\ParameterValidatorBundle\Tests;

use ktarila\ParameterValidatorBundle\ParameterValidatorBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Extension\Extension;

class ParameterValidatorBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        $bundle = new ParameterValidatorBundle();
        $this->assertInstanceOf(Extension::class, $bundle->getContainerExtension());
    }
}
