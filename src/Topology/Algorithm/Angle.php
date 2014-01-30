<?php

/**
 * This file is part of the Topology package.
 *
 * (c) Igor Golovanov <igor.golovanov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Topology\Algorithm;

use Topology\Geometry\CoordinateInterface;

class Angle
{
    /**
     * Converts from radians to degrees.
     *
     * @param double $radians an angle in radians
     * @return double the angle in degrees
     */
    public static function toDegrees($radians)
    {
        return ($radians * 180) / M_PI;
    }

    /**
     * Converts from degrees to radians.
     *
     * @param double $angleDegrees an angle in degrees
     * @return double the angle in radians
     */
    public static function toRadians($angleDegrees)
    {
        return ($angleDegrees * M_PI) / 180.0;
    }

    /**
     * Returns the angle of the vector from p0 to p1, (or from (0,0) to p if p1 is null) relative to the positive
     * X-axis. The angle will be in the range [ -Pi, Pi ].
     *
     * @param \Topology\Geometry\CoordinateInterface $p0
     * @param \Topology\Geometry\CoordinateInterface $p1
     * @return double the angle (in radians) that p0-p1 makes with the positive x-axis.
     */
    public static function angle(CoordinateInterface $p0, CoordinateInterface $p1 = null)
    {
        return 0.0;
    }
}