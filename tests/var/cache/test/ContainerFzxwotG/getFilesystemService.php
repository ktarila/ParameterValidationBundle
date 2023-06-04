<?php

namespace ContainerFzxwotG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilesystemService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Filesystem/Filesystem.php';

        return $container->privates['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
}
