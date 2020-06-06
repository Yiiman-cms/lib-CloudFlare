<?php
/**
 * User: junade
 * Date: 01/02/2017
 * Time: 12:31
 */

namespace system\lib\cloudflare\Endpoints;

use system\lib\cloudflare\Adapter\Adapter;

interface API
{
    public function __construct(Adapter $adapter);
}
