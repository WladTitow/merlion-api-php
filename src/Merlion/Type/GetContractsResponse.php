<?php

namespace Merlion\Type;

class GetContractsResponse
{

    /**
     * @var \Merlion\Type\ArrayOfContractsResult
     */
    private $getContractsResult;

    /**
     * @return \Merlion\Type\ArrayOfContractsResult
     */
    public function getGetContractsResult()
    {
        return $this->getContractsResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfContractsResult $getContractsResult
     * @return GetContractsResponse
     */
    public function withGetContractsResult($getContractsResult)
    {
        $new = clone $this;
        $new->getContractsResult = $getContractsResult;

        return $new;
    }


}

