<?php

namespace HeimrichHannot\ContaoUxTurboEncore;

use HeimrichHannot\EncoreContracts\EncoreEntry;
use HeimrichHannot\EncoreContracts\EncoreExtensionInterface;

class EncoreExtension implements EncoreExtensionInterface
{
    public function getBundle(): string
    {
        return HeimrichHannotContaoUxTurboEncoreBundle::class;
    }

    public function getEntries(): array
    {
        return [
            EncoreEntry::create('huh_ux_turbo_encore', 'assets/js/turbo.js'),
        ];
    }
}