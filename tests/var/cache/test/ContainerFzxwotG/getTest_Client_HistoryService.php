<?php

namespace ContainerFzxwotG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_Client_HistoryService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/BrowserKit/History.php';

        $container->factories['service_container']['test.client.history'] = function () use ($container) {
            return new \Symfony\Component\BrowserKit\History();
        };

        return $container->factories['service_container']['test.client.history']();
    }
}
