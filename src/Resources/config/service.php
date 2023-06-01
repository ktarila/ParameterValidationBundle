<?php

declare(strict_types=1);

use ktarila\ParameterValidatorBundle\Validator\ParameterValidation;
use ktarila\ParameterValidatorBundle\Validator\ValidationInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->services()
        ->set(ParameterValidation::class)
            ->autowire(true)

        ->alias(ValidationInterface::class, ParameterValidation::class)
    ;
};
