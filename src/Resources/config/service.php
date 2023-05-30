<?php

declare(strict_types=1);

use ktarila\ParameterValidatorBundle\Annotation\ParamValidationFieldsReader;
use ktarila\ParameterValidatorBundle\Annotation\ParamValidationFieldsReaderInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->services()
        ->set(ParamValidationFieldsReader::class)
            ->public()
            ->autowire(true)

        ->alias(ParamValidationFieldsReaderInterface::class, ParamValidationFieldsReader::class)
            ->public()
    ;
};
