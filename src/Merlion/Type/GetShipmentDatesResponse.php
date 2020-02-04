<?php

namespace Merlion\Type;

class GetShipmentDatesResponse
{

    /**
     * @var \Merlion\Type\ArrayOfShipmentDatesResult
     */
    private $getShipmentDatesResult;

    /**
     * @return \Merlion\Type\ArrayOfShipmentDatesResult
     */
    public function getGetShipmentDatesResult()
    {
        return $this->getShipmentDatesResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfShipmentDatesResult $getShipmentDatesResult
     * @return GetShipmentDatesResponse
     */
    public function withGetShipmentDatesResult($getShipmentDatesResult)
    {
        $new = clone $this;
        $new->getShipmentDatesResult = $getShipmentDatesResult;

        return $new;
    }


}

