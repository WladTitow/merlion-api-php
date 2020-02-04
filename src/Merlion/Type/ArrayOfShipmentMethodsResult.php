<?php

namespace Merlion\Type;

class ArrayOfShipmentMethodsResult
{

    /**
     * @var \Merlion\Type\ShipmentMethodsResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ShipmentMethodsResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ShipmentMethodsResult $item
     * @return ArrayOfShipmentMethodsResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

