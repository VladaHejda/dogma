<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Geolocation\Provider;

use Dogma\Geolocation\Position;

class ConstantPositionProvider implements PositionProvider
{

    /** @var \Dogma\Geolocation\Position */
    private $position;

    public function __construct(Position $position)
    {
        $this->position = $position;
    }

    public function getPosition(): Position
    {
        return $this->position;
    }

}
