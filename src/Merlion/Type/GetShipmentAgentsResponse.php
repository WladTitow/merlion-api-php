<?php

namespace Merlion\Type;

class GetShipmentAgentsResponse
{

    /**
     * @var \Merlion\Type\ArrayOfDictionaryResult
     */
    private $getShipmentAgentsResult;

    /**
     * @return \Merlion\Type\ArrayOfDictionaryResult
     */
    public function getGetShipmentAgentsResult()
    {
        return $this->getShipmentAgentsResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfDictionaryResult $getShipmentAgentsResult
     * @return GetShipmentAgentsResponse
     */
    public function withGetShipmentAgentsResult($getShipmentAgentsResult)
    {
        $new = clone $this;
        $new->getShipmentAgentsResult = $getShipmentAgentsResult;

        return $new;
    }


}

