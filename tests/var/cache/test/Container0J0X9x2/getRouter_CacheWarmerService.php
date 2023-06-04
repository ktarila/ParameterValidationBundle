<?php

namespace Container0J0X9x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouter_CacheWarmerService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/CacheWarmer/RouterCacheWarmer.php';

        return $container->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $container));
    }
}
