<?php

namespace Merlion\Type;

class GetShipmentDates
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $ShipmentMethodCode;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return GetShipmentDates
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentMethodCode()
    {
        return $this->ShipmentMethodCode;
    }

    /**
     * @param string $ShipmentMethodCode
     * @return GetShipmentDates
     */
    public function withShipmentMethodCode($ShipmentMethodCode)
    {
        $new = clone $this;
        $new->ShipmentMethodCode = $ShipmentMethodCode;

        return $new;
    }


}

