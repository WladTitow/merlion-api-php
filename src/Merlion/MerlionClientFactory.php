<?php

namespace Merlion;

use Merlion\MerlionClient;
use Merlion\MerlionClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Http\Adapter\Guzzle6\Client;
use Phpro\SoapClient\Middleware\BasicAuthMiddleware;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
class MerlionClientFactory
{
    public static function factory(string $wsdl, string $login, string $password) : \Merlion\MerlionClient
    {        
        $handler = HttPlugHandle::createForClient(
           Client::createWithConfig(['headers' => ['User-Agent' => 'testing/1.0'], 'verify' => false])
        );
        $handler->addMiddleware(new BasicAuthMiddleware($login, $password));
        
        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(MerlionClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new MerlionClient($engine, $eventDispatcher);
    }

}

