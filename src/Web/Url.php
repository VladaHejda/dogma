<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Web;

use Dogma\StrictBehaviorMixin;

class Url
{
    use StrictBehaviorMixin;

    /** @var \Nette\Http\Url */
    private $url;

    public function __construct(string $url)
    {
        try {
            $this->url = new \Nette\Http\Url($url);
        } catch (\Nette\InvalidArgumentException $e) {
            throw new InvalidUrlException($url);
        }
    }

    public function getValue(): string
    {
        return $this->url->getAbsoluteUrl();
    }

    public function getScheme(): UriScheme
    {
        return UriScheme::get($this->url->getScheme());
    }

    /**
     * @return string|null
     */
    public function getUser(): string
    {
        return $this->url->getUser();
    }

    /**
     * @return string|null
     */
    public function getPassword(): string
    {
        return $this->url->getPassword();
    }

    public function getHost(): Domain
    {
        return new Domain($this->url->getHost());
    }

    public function getDomain(): Domain
    {
        return new Domain($this->url->getHost());
    }

    public function getTld(): Tld
    {
        return $this->getDomain()->getTld();
    }

    public function getPort(): ?int
    {
        return $this->url->getPort();
    }

    public function getPath(): string
    {
        return $this->url->getPath();
    }

    public function getQuery(): string
    {
        return $this->url->getQuery();
    }

    public function getFragment(): string
    {
        return $this->getFragment();
    }

}
