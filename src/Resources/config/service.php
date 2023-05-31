<?php

declare(strict_types=1);

use ktarila\ParameterValidatorBundle\Validator\Validation;
use ktarila\ParameterValidatorBundle\Validator\ValidationInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->services()
        ->set(Validation::class)
            ->public()
            ->autowire(true)

        ->alias(ValidationInterface::class, Validation::class)
            ->public()
    ;
};
