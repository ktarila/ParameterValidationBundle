<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 4).'/vendor/autoload.php';
(require __DIR__.'/ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer.php')->set(\ContainerFzxwotG\ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer::class, null);
require __DIR__.'/ContainerFzxwotG/getTest_ServiceContainerService.php';
require __DIR__.'/ContainerFzxwotG/getTest_PrivateServicesLocatorService.php';
require __DIR__.'/ContainerFzxwotG/getTest_Client_HistoryService.php';
require __DIR__.'/ContainerFzxwotG/getTest_Client_CookiejarService.php';
require __DIR__.'/ContainerFzxwotG/getTest_ClientService.php';
require __DIR__.'/ContainerFzxwotG/getSluggerService.php';
require __DIR__.'/ContainerFzxwotG/getSession_Storage_Factory_MockFileService.php';
require __DIR__.'/ContainerFzxwotG/getSession_FactoryService.php';
require __DIR__.'/ContainerFzxwotG/getServicesResetterService.php';
require __DIR__.'/ContainerFzxwotG/getSecrets_VaultService.php';
require __DIR__.'/ContainerFzxwotG/getSecrets_DecryptionKeyService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_ResolverService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_YmlService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_XmlService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_Psr4Service.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_PhpService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_GlobService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_DirectoryService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_ContainerService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_Annotation_FileService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_Annotation_DirectoryService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_Loader_AnnotationService.php';
require __DIR__.'/ContainerFzxwotG/getRouting_LoaderService.php';
require __DIR__.'/ContainerFzxwotG/getMonolog_Logger_CacheService.php';
require __DIR__.'/ContainerFzxwotG/getMonolog_LoggerService.php';
require __DIR__.'/ContainerFzxwotG/getTestControllerService.php';
require __DIR__.'/ContainerFzxwotG/getFileLocatorService.php';
require __DIR__.'/ContainerFzxwotG/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerFzxwotG/getErrorControllerService.php';
require __DIR__.'/ContainerFzxwotG/getDependencyInjection_Config_ContainerParametersResourceCheckerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_FileLinkFormatterService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_Variadic_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_Session_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_Service_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_RequestAttribute_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_Request_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_NotTaggedController_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_Default_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_Datetime_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_BackedEnumResolver_InnerService.php';
require __DIR__.'/ContainerFzxwotG/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerFzxwotG/getContainer_GetenvService.php';
require __DIR__.'/ContainerFzxwotG/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerFzxwotG/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerFzxwotG/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerFzxwotG/getConfig_Resource_SelfCheckingResourceCheckerService.php';
require __DIR__.'/ContainerFzxwotG/getCache_SystemClearerService.php';
require __DIR__.'/ContainerFzxwotG/getCache_SystemService.php';
require __DIR__.'/ContainerFzxwotG/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerFzxwotG/getCache_DefaultMarshallerService.php';
require __DIR__.'/ContainerFzxwotG/getCache_AppClearerService.php';
require __DIR__.'/ContainerFzxwotG/getCache_AppService.php';
require __DIR__.'/ContainerFzxwotG/getTemplateControllerService.php';
require __DIR__.'/ContainerFzxwotG/getRedirectControllerService.php';
require __DIR__.'/ContainerFzxwotG/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerFzxwotG/get_ServiceLocator_Sy52UOXService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'ktarila\ParameterValidatorBundle\Tests\Kernel';
$classes[] = 'ktarila\ParameterValidatorBundle\Tests\TestController\TestController';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Bundle\FrameworkBundle\KernelBrowser';
$classes[] = 'Symfony\Component\BrowserKit\CookieJar';
$classes[] = 'Symfony\Component\BrowserKit\History';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Test\TestContainer';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);