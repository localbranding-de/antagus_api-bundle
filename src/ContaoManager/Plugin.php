<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace LocalbrandingDe\AntagusApiBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface; 
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use LocalbrandingDe\AntagusApiBundle\LocalwebShopBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(AntagusApiBundle::class)
            ->setLoadAfter([ContaoCoreBundle::class,'LeadingSystems\MerconisBundle\LeadingSystemsMerconisBundle']),
        ];
    }
}
