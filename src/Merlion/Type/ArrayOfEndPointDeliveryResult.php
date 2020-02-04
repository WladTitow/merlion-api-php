<?php

namespace Merlion\Type;

class ArrayOfEndPointDeliveryResult
{

    /**
     * @var \Merlion\Type\EndPointDeliveryResult
     */
    private $item;

    /**
     * @return \Merlion\Type\EndPointDeliveryResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\EndPointDeliveryResult $item
     * @return ArrayOfEndPointDeliveryResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

