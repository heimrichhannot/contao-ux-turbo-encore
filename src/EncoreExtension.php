<?php

namespace HeimrichHannot\ContaoUxTurboEncore;

use HeimrichHannot\EncoreContracts\EncoreEntry;
use HeimrichHannot\EncoreContracts\EncoreExtensionInterface;

class EncoreExtension implements EncoreExtensionInterface
{
    public const DEFAULT = 'huh_ux_turbo_encore';
    public const NO_DRIVER = 'huh_ux_turbo_encore_no_drive';

    public function getBundle(): string
    {
        return HeimrichHannotContaoUxTurboEncoreBundle::class;
    }

    public function getEntries(): array
    {
        return [
            EncoreEntry::create('huh_ux_turbo_encore', 'assets/js/turbo.js')
                ->setIsHeadScript(true),
            EncoreEntry::create('huh_ux_turbo_encore_no_drive', 'assets/js/turbo_no_drive.js')
                ->setIsHeadScript(true),
        ];
    }
}