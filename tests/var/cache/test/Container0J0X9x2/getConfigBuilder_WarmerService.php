<?php

namespace Container0J0X9x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigBuilder_WarmerService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'config_builder.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ConfigBuilderCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/CacheWarmer/ConfigBuilderCacheWarmer.php';

        return $container->privates['config_builder.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ConfigBuilderCacheWarmer(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
