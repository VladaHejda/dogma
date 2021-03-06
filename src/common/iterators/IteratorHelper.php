<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma;

class IteratorHelper
{
    use StaticClassMixin;

    public static function iterableToIterator(iterable $iterable): \Iterator
    {
        if (is_array($iterable)) {
            return new ArrayIterator($iterable);
        } elseif ($iterable instanceof \Iterator) {
            return $iterable;
        }

        while ($iterable instanceof \IteratorAggregate) {
            /** @var \Iterator $iterable */
            $iterable = $iterable->getIterator();
        }

        return $iterable;
    }

}
