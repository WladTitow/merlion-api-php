<?php

namespace Merlion\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCatalogResponse implements ResultInterface
{

    /**
     * @var \Merlion\Type\ArrayOfCatalogResult
     */
    private $getCatalogResult;

    /**
     * @return \Merlion\Type\ArrayOfCatalogResult
     */
    public function getGetCatalogResult()
    {
        return $this->getCatalogResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfCatalogResult $getCatalogResult
     * @return GetCatalogResponse
     */
    public function withGetCatalogResult($getCatalogResult)
    {
        $new = clone $this;
        $new->getCatalogResult = $getCatalogResult;

        return $new;
    }


}

