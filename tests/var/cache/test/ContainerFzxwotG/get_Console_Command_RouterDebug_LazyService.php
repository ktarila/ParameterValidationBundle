<?php

namespace ContainerFzxwotG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_RouterDebug_LazyService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private '.console.command.router_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/LazyCommand.php';

        return $container->privates['.console.command.router_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:router', [], 'Display current routes for an application', false, #[\Closure(name: 'console.command.router_debug', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand')] function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand {
            return ($container->privates['console.command.router_debug'] ?? $container->load('getConsole_Command_RouterDebugService'));
        });
    }
}