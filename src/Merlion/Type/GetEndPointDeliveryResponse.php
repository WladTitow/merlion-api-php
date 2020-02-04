<?php

namespace Merlion\Type;

class GetEndPointDeliveryResponse
{

    /**
     * @var \Merlion\Type\ArrayOfEndPointDeliveryResult
     */
    private $getEndPointDeliveryResult;

    /**
     * @return \Merlion\Type\ArrayOfEndPointDeliveryResult
     */
    public function getGetEndPointDeliveryResult()
    {
        return $this->getEndPointDeliveryResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfEndPointDeliveryResult $getEndPointDeliveryResult
     * @return GetEndPointDeliveryResponse
     */
    public function withGetEndPointDeliveryResult($getEndPointDeliveryResult)
    {
        $new = clone $this;
        $new->getEndPointDeliveryResult = $getEndPointDeliveryResult;

        return $new;
    }


}

