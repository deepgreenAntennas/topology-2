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


class Coordinate implements CoordinateInterface
{
    /**
     * X-coordinate
     *
     * @var double
     */
    private $x;

    /**
     * Y-coordinate
     *
     * @var double
     */
    private $y;

    /**
     * Z-coordinate
     *
     * @var double
     */
    private $z;


    /**
     * Gets the X-coordinate
     *
     * @return double X-coordinate
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Gets the Y-coordinate
     *
     * @return double Y-coordinate
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Gets the Z-coordinate
     *
     * @return double Z-coordinate
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Sets the X-coordinate
     *
     * @param double $x X-coordinate
     * @return \Topology\Geometry\Coordinate
     */
    public function setX($x)
    {
        $this->x = (double) $x;
        return $this;
    }

    /**
     * Sets the Y-coordinate
     *
     * @param double $y Y-coordinate
     * @return \Topology\Geometry\Coordinate
     */
    public function setY($y)
    {
        $this->y = (double) $y;
        return $this;
    }

    /**
     * Sets the Z-coordinate
     *
     * @param double $z Z-coordinate
     * @return \Topology\Geometry\Coordinate
     */
    public function setZ($z)
    {
        $this->z = (double) $z;
        return $this;
    }
}