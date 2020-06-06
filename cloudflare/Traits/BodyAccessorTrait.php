<?php

namespace system\lib\cloudflare\Traits;

trait BodyAccessorTrait
{
    private $body;

    public function getBody()
    {
        return $this->body;
    }
}
