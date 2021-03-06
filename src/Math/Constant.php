<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

// spell-check-ignore: π

namespace Dogma\Math;

use Dogma\StaticClassMixin;

class Constant
{
    use StaticClassMixin;

    public const E = M_E;
    public const PI = M_PI;
    public const EULER = M_EULER;
    public const GAMMA = M_EULER;
    public const OMEGA = 0.56714329040978387299996866221035554;

    public const PHI = self::FIBONACCI;
    public const FIBONACCI = 1.61803398874989484820458683436563811;
    public const TRIBONACCI = 1.83928675521416113255185256465328660;

    public const LOG_2_E = M_LOG2E; // log2(e)
    public const LOG_10_E = M_LOG10E; // log10(e)
    public const LN_2 = M_LN2; // ln(2)
    public const LN_10 = M_LN10; // ln(10)
    public const LN_PI = M_LNPI; // ln(π)

    public const HALF_PI = M_PI_2; // π/2
    public const QUARTER_PI = M_PI_4; // π/4
    public const INV_PI = M_1_PI; // 1/π
    public const TWO_INV_PI = M_2_PI; // 2/π
    public const INV_SQRT_PI = M_SQRTPI; // 1/√π
    public const TWO_INV_SQRT_PI = M_2_SQRTPI; // 2/√π

    public const SQRT_2 = M_SQRT2; // √2
    public const SQRT_3 = M_SQRT3; // √3
    public const SQRT_5 = 2.23606797749978969640917366873127623; // √5
    public const INV_SQRT_2 = M_SQRT1_2; // 1/√2
    public const INV_SQRT_3 = 0.57735026918962576450914878050195745; // 1/√3
    public const INV_SQRT_5 = 0.44721359549995793928183473374625524; // 1/√5

}
