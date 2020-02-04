<?php

namespace Merlion\Type;

class ArrayOfLinkedItemsResult
{

    /**
     * @var \Merlion\Type\LinkedItemsResult
     */
    private $item;

    /**
     * @return \Merlion\Type\LinkedItemsResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\LinkedItemsResult $item
     * @return ArrayOfLinkedItemsResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

