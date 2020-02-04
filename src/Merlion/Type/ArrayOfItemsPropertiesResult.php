<?php

namespace Merlion\Type;

class ArrayOfItemsPropertiesResult
{

    /**
     * @var \Merlion\Type\ItemsPropertiesResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ItemsPropertiesResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ItemsPropertiesResult $item
     * @return ArrayOfItemsPropertiesResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

