<?php

namespace Merlion\Type;

class GetShipmentMethods
{

    /**
     * @var string
     */
    private $code;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return GetShipmentMethods
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }


}

