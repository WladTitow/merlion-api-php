<?php

namespace Merlion\Type;

class GetEndPointDelivery
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $ShippingAgentCode;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return GetEndPointDelivery
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAgentCode()
    {
        return $this->ShippingAgentCode;
    }

    /**
     * @param string $ShippingAgentCode
     * @return GetEndPointDelivery
     */
    public function withShippingAgentCode($ShippingAgentCode)
    {
        $new = clone $this;
        $new->ShippingAgentCode = $ShippingAgentCode;

        return $new;
    }


}

