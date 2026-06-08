<?php

namespace HeimrichHannot\ContaoUxTurboEncore;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HeimrichHannotContaoUxTurboEncoreBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $configurator, ContainerBuilder $container): void
    {
        $configurator->import('../config/services.php');
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }


}