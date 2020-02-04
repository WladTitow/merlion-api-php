<?php

namespace Merlion\Type;

class ArrayOfItemsAvailResult
{

    /**
     * @var \Merlion\Type\ItemsAvailResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ItemsAvailResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ItemsAvailResult $item
     * @return ArrayOfItemsAvailResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

