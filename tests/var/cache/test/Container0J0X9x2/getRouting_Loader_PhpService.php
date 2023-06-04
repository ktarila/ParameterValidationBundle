<?php

namespace Container0J0X9x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_PhpService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/Loader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Config/FileLocator.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Config/FileLocator.php';

        return $container->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($container->privates['file_locator'] ??= new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)))), 'test');
    }
}
