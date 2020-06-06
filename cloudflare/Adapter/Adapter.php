<?php
/**
 * User: junade
 * Date: 13/01/2017
 * Time: 16:06
 */

namespace system\lib\cloudflare\Adapter;

use system\lib\cloudflare\Auth\Auth;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface Adapter
 * @package system\lib\cloudflare\Adapter
 * Note that the $body fields expect a JSON key value store.
 */
interface Adapter
{
    /**
     * Adapter constructor.
     *
     * @param Auth $auth
     * @param string $baseURI
     */
    public function __construct(Auth $auth, string $baseURI);

    /**
     * Sends a GET request.
     * Per Robustness Principle - not including the ability to send a body with a GET request (though possible in the
     * RFCs, it is never useful).
     *
     * @param string $uri
     * @param array $data
     * @param array $headers
     *
     * @return mixed
     */
    public function get(string $uri, array $data = [], array $headers = []): ResponseInterface;

    /**
     * @param string $uri
     * @param array $data
     * @param array $headers
     *
     * @return mixed
     */
    public function post(string $uri, array $data = [], array $headers = []): ResponseInterface;

    /**
     * @param string $uri
     * @param array $data
     * @param array $headers
     *
     * @return mixed
     */
    public function put(string $uri, array $data = [], array $headers = []): ResponseInterface;

    /**
     * @param string $uri
     * @param array $data
     * @param array $headers
     *
     * @return mixed
     */
    public function patch(string $uri, array $data = [], array $headers = []): ResponseInterface;

    /**
     * @param string $uri
     * @param array $data
     * @param array $headers
     *
     * @return mixed
     */
    public function delete(string $uri, array $data = [], array $headers = []): ResponseInterface;
}
