<?php

namespace Container0J0X9x2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_SecretsGenerateKey_LazyService extends ktarila_ParameterValidatorBundle_Tests_KernelTestDebugContainer
{
    /**
     * Gets the private '.console.command.secrets_generate_key.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
        include_once \dirname(__DIR__, 5).'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/LazyCommand.php';

        return $container->privates['.console.command.secrets_generate_key.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('secrets:generate-keys', [], 'Generate new encryption keys', false, #[\Closure(name: 'console.command.secrets_generate_key', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand')] function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand {
            return ($container->privates['console.command.secrets_generate_key'] ?? $container->load('getConsole_Command_SecretsGenerateKeyService'));
        });
    }
}
