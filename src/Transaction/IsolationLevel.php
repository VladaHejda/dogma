<?php
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Transaction;

final class IsolationLevel extends \Dogma\Enum\StringEnum
{

    public const SERIALIZABLE = 'serializable';
    public const READ_COMMITTED = 'read committed';
    public const REPEATABLE_READ = 'repeatable read';
    public const READ_UNCOMMITTED = 'read uncommitted';

}