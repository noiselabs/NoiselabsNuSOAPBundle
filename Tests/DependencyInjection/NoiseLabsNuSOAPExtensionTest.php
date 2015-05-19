<?php
/**
 * This file is part of NoiseLabs-NuSOAPBundle
 *
 * NoiseLabs-NuSOAPBundle is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * NoiseLabs-NuSOAPBundle is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with NoiseLabs-NuSOAPBundle; if not, see
 * <http://www.gnu.org/licenses/>.
 *
 * Copyright (C) 2012-2015 Vítor Brandão
 *
 * @category    NoiseLabs
 * @package     NuSOAPBundle
 * @copyright   (C) 2012-2015 Vítor Brandão <vitor@noiselabs.org>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL-3
 * @link        http://www.noiselabs.org
 */

namespace NoiseLabs\Bundle\NuSOAPBundle\Tests\DependencyInjection;

use NoiseLabs\Bundle\NuSOAPBundle\DependencyInjection\NoiseLabsNuSOAPExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

class NoiseLabsNuSOAPExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testAlias()
    {
        $extension = new NoiseLabsNuSOAPExtension();

        $this->assertEquals('noise_labs_nu_soap', $extension->getAlias());
    }

    public function testLoadFromExtension()
    {
        $container = $this->createContainer();
        $container->registerExtension(new NoiseLabsNuSOAPExtension());
        $container->loadFromExtension('noise_labs_nu_soap', array());
    }

    /**
     * @return \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    private function createContainer()
    {
        $container = new ContainerBuilder(new ParameterBag(array(
            'kernel.cache_dir' => __DIR__,
            'kernel.root_dir' => __DIR__.'/Fixtures',
            'kernel.charset' => 'UTF-8',
            'kernel.debug' => false,
            'kernel.bundles' => array('NoiseLabsNuSOAPBundle' => 'NoiseLabs\\Bundle\\NuSOAPBundle\\NoiseLabsNuSOAPBundle'),
        )));

        return $container;
    }
}
