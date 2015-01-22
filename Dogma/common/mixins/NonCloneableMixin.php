<?php

namespace Dogma;

trait NonCloneableMixin
{

    /**
     * To avoid cloning a non cloneable object
     * @throws \Dogma\NonCloneableObjectException
     */
    final public function __clone()
    {
        throw new \Dogma\NonCloneableObjectException(get_class($this));
    }

}
