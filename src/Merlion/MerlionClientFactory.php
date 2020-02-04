<?php

namespace Merlion;

use Merlion\MerlionClient;
use Merlion\MerlionClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class MerlionClientFactory
{

    public static function factory(string $wsdl) : \Merlion\MerlionClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(MerlionClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new MerlionClient($engine, $eventDispatcher);
    }


}

