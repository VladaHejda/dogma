<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Time\Provider;

use Dogma\Time\Date;
use Dogma\Time\DateTime;

interface TimeProvider
{

    public function getDate(): Date;

    public function getDateTime(): DateTime;

    public function getTimeZone(): \DateTimeZone;

}
