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


interface CoordinateInterface
{
    /**
     * Gets the X-coordinate
     *
     * @return double X-coordinate
     */
    public function getX();

    /**
     * Gets the Y-coordinate
     *
     * @return double Y-coordinate
     */
    public function getY();

    /**
     * Gets the Z-coordinate
     *
     * @return double Z-coordinate
     */
    public function getZ();

    /**
     * Sets the X-coordinate
     *
     * @param double $x X-coordinate
     * @return \Topology\Geometry\CoordinateInterface
     */
    public function setX($x);

    /**
     * Sets the Y-coordinate
     *
     * @param double $y Y-coordinate
     * @return \Topology\Geometry\CoordinateInterface
     */
    public function setY($y);

    /**
     * Sets the Z-coordinate
     *
     * @param double $z Z-coordinate
     * @return \Topology\Geometry\CoordinateInterface
     */
    public function setZ($z);
}