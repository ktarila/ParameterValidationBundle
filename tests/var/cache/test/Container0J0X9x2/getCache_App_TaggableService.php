<?php

namespace Container0J0X9x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_App_TaggableService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'cache.app.taggable' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/TagAwareAdapterInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/contracts/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/contracts/Cache/TagAwareCacheInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Cache/PruneableInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/psr/log/src/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/contracts/Cache/CacheTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/psr/log/src/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/TagAwareAdapter.php';

        return $container->privates['cache.app.taggable'] = new \Symfony\Component\Cache\Adapter\TagAwareAdapter(($container->services['cache.app'] ?? $container->load('getCache_AppService')));
    }
}
