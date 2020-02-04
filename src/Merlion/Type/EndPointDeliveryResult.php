<?php

namespace Merlion\Type;

class EndPointDeliveryResult
{

    /**
     * @var int
     */
    private $ID;

    /**
     * @var string
     */
    private $Endpoint_address;

    /**
     * @var string
     */
    private $Endpoint_contact;

    /**
     * @var string
     */
    private $ShippingAgentCode;

    /**
     * @var string
     */
    private $City;

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return EndPointDeliveryResult
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndpoint_address()
    {
        return $this->Endpoint_address;
    }

    /**
     * @param string $Endpoint_address
     * @return EndPointDeliveryResult
     */
    public function withEndpoint_address($Endpoint_address)
    {
        $new = clone $this;
        $new->Endpoint_address = $Endpoint_address;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndpoint_contact()
    {
        return $this->Endpoint_contact;
    }

    /**
     * @param string $Endpoint_contact
     * @return EndPointDeliveryResult
     */
    public function withEndpoint_contact($Endpoint_contact)
    {
        $new = clone $this;
        $new->Endpoint_contact = $Endpoint_contact;

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
     * @return EndPointDeliveryResult
     */
    public function withShippingAgentCode($ShippingAgentCode)
    {
        $new = clone $this;
        $new->ShippingAgentCode = $ShippingAgentCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return EndPointDeliveryResult
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }


}

