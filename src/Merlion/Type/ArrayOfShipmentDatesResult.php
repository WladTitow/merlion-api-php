<?php

namespace Merlion\Type;

class ArrayOfShipmentDatesResult
{

    /**
     * @var \Merlion\Type\ShipmentDatesResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ShipmentDatesResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ShipmentDatesResult $item
     * @return ArrayOfShipmentDatesResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

