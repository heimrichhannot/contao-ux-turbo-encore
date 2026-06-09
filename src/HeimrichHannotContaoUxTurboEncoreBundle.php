<?php

namespace HeimrichHannot\ContaoUxTurboEncore;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HeimrichHannotContaoUxTurboEncoreBundle extends AbstractBundle
{
    public function prependExtension(ContainerConfigurator $configurator, ContainerBuilder $container): void
    {
        $container->prependExtensionConfig('webpack_encore', [
            'script_attributes' => [
                'defer' => true,
                'data-turbo-track' => 'reload',
            ],
            'link_attributes' => [
                'data-turbo-track' => 'reload',
            ],
        ]);
    }

    public function loadExtension(array $config, ContainerConfigurator $configurator, ContainerBuilder $container): void
    {
        $configurator->import('../config/services.php');
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
