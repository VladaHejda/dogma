<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Io;

use Dogma\Enum\IntEnum;

class FilePosition extends IntEnum
{

    public const BEGINNING = SEEK_SET;
    public const CURRENT = SEEK_CUR;
    public const END = SEEK_END;

}
