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


class Envelope
{
    /**
     * the minimum x-coordinate
     *
     * @var double
     */
    private $minX;

    /**
     * the maximum x-coordinate
     *
     * @var double
     */
    private $maxX;

    /**
     * the minimum y-coordinate
     *
     * @var double
     */
    private $minY;

    /**
     * the maximum y-coordinate
     *
     * @var double
     */
    private $maxY;

    /**
     * Get the envelope minimum x-value
     *
     * @return double
     */
    public function getMinX()
    {
        return $this->minX;
    }

    /**
     * Get the envelope minimum y-value
     *
     * @return double
     */
    public function getMinY()
    {
        return $this->minY;
    }

    /**
     * Get the envelope maximum x-value
     *
     * @return double
     */
    public function getMaxX()
    {
        return $this->maxX;
    }

    /**
     * Get the envelope maximum y-value
     *
     * @return double
     */
    public function getMaxY()
    {
        return $this->maxY;
    }

    /**
     * @param double $deltaX
     * @param double $deltaY
     * @return $this
     */
    public function expandBy($deltaX, $deltaY = null)
    {
        if (null === $deltaY) {
            $deltaY = $deltaX;
        }
        if($this->isNull()) {
            return $this;
        }

        return $this;
    }

    public function isNull()
    {
        return $this->maxX < $this->minX;
    }
}