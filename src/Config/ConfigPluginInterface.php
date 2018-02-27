<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ManagerPlugin\Config;

use Symfony\Component\Config\Loader\LoaderInterface;

interface ConfigPluginInterface
{
    /**
     * Allows a plugin to load container configuration.
     *
     * @param LoaderInterface $loader
     * @param array           $managerConfig
     */
    public function registerContainerConfiguration(LoaderInterface $loader, array $managerConfig);
}
