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


interface CoordinateSequenceInterface
{
    public function getDimension();

    public function getCoordinate($index);

    public function getSize();

    public function getX($index);

    public function getY($index);

    public function getOrdinate($index, $ordinateIndex);

    public function setOrdinate($index, $ordinateIndex, $value);

    public function expandEnvelope(Envelope $env);
}