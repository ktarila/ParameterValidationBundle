<?php

namespace ContainerFzxwotG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_DebugAutowiringService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/BuildDebugContainerTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/DebugAutowiringCommand.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Debug/FileLinkFormatter.php';

        $container->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE'))));

        $instance->setName('debug:autowiring');
        $instance->setDescription('List classes/interfaces you can use for autowiring');

        return $instance;
    }
}