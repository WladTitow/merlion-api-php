<?php

namespace Merlion\Type;

class GetShipmentMethodsResponse
{

    /**
     * @var \Merlion\Type\ArrayOfShipmentMethodsResult
     */
    private $getShipmentMethodsResult;

    /**
     * @return \Merlion\Type\ArrayOfShipmentMethodsResult
     */
    public function getGetShipmentMethodsResult()
    {
        return $this->getShipmentMethodsResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfShipmentMethodsResult $getShipmentMethodsResult
     * @return GetShipmentMethodsResponse
     */
    public function withGetShipmentMethodsResult($getShipmentMethodsResult)
    {
        $new = clone $this;
        $new->getShipmentMethodsResult = $getShipmentMethodsResult;

        return $new;
    }


}

