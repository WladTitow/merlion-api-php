<?php

namespace Merlion\Type;

class ArrayOfOrdersListResult
{

    /**
     * @var \Merlion\Type\OrdersListResult
     */
    private $item;

    /**
     * @return \Merlion\Type\OrdersListResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\OrdersListResult $item
     * @return ArrayOfOrdersListResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

