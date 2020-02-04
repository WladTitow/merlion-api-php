<?php

namespace Merlion\Type;

class ShipmentMethodsResult
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var int
     */
    private $IsDefault;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return ShipmentMethodsResult
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ShipmentMethodsResult
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return int
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }

    /**
     * @param int $IsDefault
     * @return ShipmentMethodsResult
     */
    public function withIsDefault($IsDefault)
    {
        $new = clone $this;
        $new->IsDefault = $IsDefault;

        return $new;
    }


}

