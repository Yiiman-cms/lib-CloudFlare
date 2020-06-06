<?php
/**
 * User: junade
 * Date: 13/01/2017
 * Time: 16:52
 */

namespace system\lib\cloudflare\Auth;

interface Auth
{
    public function getHeaders(): array;
}
