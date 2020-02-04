<?php

namespace Merlion\Type;

class ArrayOfItemsResult
{

    /**
     * @var \Merlion\Type\ItemsResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ItemsResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ItemsResult $item
     * @return ArrayOfItemsResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

