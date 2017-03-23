<?php
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma;

class ReverseArrayIterator implements \Iterator
{
    use \Dogma\StrictBehaviorMixin;

    /** @var mixed[] */
    private $array;

    /**
     * @param mixed[] $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function rewind(): void
    {
        end($this->array);
    }

    public function next(): void
    {
        prev($this->array);
    }

    public function valid(): bool
    {
        return key($this->array) !== null;
    }

    /**
     * @return int|string
     */
    public function key()
    {
        return key($this->array);
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->array);
    }

}