<?php

namespace Container0J0X9x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_FactoryService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private 'session.factory' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\SessionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/Session/SessionFactoryInterface.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/Session/SessionFactory.php';

        $a = ($container->privates['test.session.listener'] ?? $container->getTest_Session_ListenerService());

        if (isset($container->privates['session.factory'])) {
            return $container->privates['session.factory'];
        }

        return $container->privates['session.factory'] = new \Symfony\Component\HttpFoundation\Session\SessionFactory(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['session.storage.factory.mock_file'] ?? $container->load('getSession_Storage_Factory_MockFileService')), [0 => $a, 1 => 'onSessionUsage']);
    }
}
