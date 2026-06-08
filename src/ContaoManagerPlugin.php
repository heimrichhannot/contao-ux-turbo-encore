<?php

namespace HeimrichHannot\ContaoUxTurboEncore;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Symfony\Component\DependencyInjection\Attribute\Exclude;
use Symfony\UX\Turbo\TurboBundle;

#[Exclude]
class ContaoManagerPlugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(TurboBundle::class),
            BundleConfig::create(HeimrichHannotContaoUxTurboEncoreBundle::class)
            ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}