<?php

/**
 * This file is part of the Topology package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Topology\Geometry;


interface CoordinateFilterInterface
{
    /**
     * @param \Topology\Geometry\CoordinateInterface $coordinate
     * @return \Topology\Geometry\CoordinateFilterInterface
     */
    public function filterCoordinate(CoordinateInterface $coordinate);
}