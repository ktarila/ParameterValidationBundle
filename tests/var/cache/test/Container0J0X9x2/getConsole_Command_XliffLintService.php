<?php

namespace Container0J0X9x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_XliffLintService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Component\Translation\Command\XliffLintCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Translation/Command/XliffLintCommand.php';

        $container->privates['console.command.xliff_lint'] = $instance = new \Symfony\Component\Translation\Command\XliffLintCommand();

        $instance->setName('lint:xliff');
        $instance->setDescription('Lint an XLIFF file and outputs encountered errors');

        return $instance;
    }
}
