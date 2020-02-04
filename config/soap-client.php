<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine(ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('config/mlservice3.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Merlion/Type')
    ->setTypeNamespace('Merlion\Type')
    ->setClientDestination('src/Merlion')
    ->setClientName('MerlionClient')
    ->setClientNamespace('Merlion')
    ->setClassMapDestination('src/Merlion')
    ->setClassMapName('MerlionClassmap')
    ->setClassMapNamespace('Merlion')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
;
