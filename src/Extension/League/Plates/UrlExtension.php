<?php

namespace App\Extension\League\Plates;

use League\Plates\Engine as PlatesEngine;
use League\Plates\Extension\ExtensionInterface;
use Psr\Http\Message\UriInterface;
use Slim\Interfaces\RouterInterface;

class UrlExtension implements ExtensionInterface
{
    private $router;

    private $uri;

    public function __construct(RouterInterface $router, UriInterface $uri)
    {
        $this->router = $router;
        $this->uri = $uri;
    }

    public function register(PlatesEngine $engine)
    {
        $engine->registerFunction('baseUrl', [$this, 'baseUrl']);
        $engine->registerFunction('uriFull', [$this, 'uriFull']);
        $engine->registerFunction('pathFor', [$this->router, 'pathFor']);
        $engine->registerFunction('basePath', [$this->uri, 'getBasePath']);
        $engine->registerFunction('uriScheme', [$this->uri, 'getScheme']);
        $engine->registerFunction('uriHost', [$this->uri, 'getHost']);
        $engine->registerFunction('uriPort', [$this->uri, 'getPort']);
        $engine->registerFunction('uriPath', [$this->uri, 'getPath']);
        $engine->registerFunction('uriQuery', [$this->uri, 'getQuery']);
        $engine->registerFunction('uriFragment', [$this->uri, 'getFragment']);
    }

    public function baseUrl($permalink = '')
    {
        return $this->uri->getBaseUrl().'/'.ltrim($permalink);
    }

    public function uriFull()
    {
        return (string) $this->uri;
    }
}
