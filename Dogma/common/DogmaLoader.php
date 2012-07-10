<?php
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma;


class DogmaLoader extends \Nette\Loaders\AutoLoader {
    
    /** @var static */
    private static $instance;
    

    /** @var array */
    public $list = array(
        'Dogma\\Object' => '/common/types/Object',
        'Dogma\\ArrayObject' => '/common/types/ArrayObject',
        'Dogma\\Collection' => '/common/types/Collection',
        'Dogma\\DateTime' => '/common/types/DateTime',
        'Dogma\\Date' => '/common/types/Date',
        'Dogma\\Enum' => '/common/types/Enum',
        'Dogma\\Regexp' => '/common/types/Regexp',
        'Dogma\\String' => '/common/types/String',
        'Dogma\\Type' => '/common/types/Type',

        'Dogma\\Io\\IoException' => '/Io/exceptions',
        'Dogma\\Io\\FileException' => '/Io/exceptions',
        'Dogma\\Io\\DirectoryException' => '/Io/exceptions',
        'Dogma\\Io\\StreamException' => '/Io/exceptions',

        'Dogma\\Dom\\DomException' => '/Dom/exceptions',
        'Dogma\\Dom\\QueryEngineException' => '/Dom/exceptions',
    );



    /**
     * Returns singleton instance with lazy instantiation.
     * @return static
     */
    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new static;
        }
        return self::$instance;
    }



    /**
     * Handles autoloading of classes or interfaces.
     * @param  string
     */
    public function tryLoad($type) {
        $type = ltrim($type, '\\');
        if (isset($this->list[$type])) {
            \Nette\Utils\LimitedScope::load(DOGMA_DIR . $this->list[$type] . '.php', TRUE);
            self::$count++;
            
        } elseif (substr($type, 0, 6) === 'Dogma\\') {
            \Nette\Utils\LimitedScope::load(DOGMA_DIR . strtr(substr($type, 5), '\\', '/') . '.php', TRUE);
            self::$count++;
        }
    }

}
