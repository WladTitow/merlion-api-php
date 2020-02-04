<?php

namespace Merlion\Type;

class ArrayOfItemsBarcodesResult
{

    /**
     * @var \Merlion\Type\ItemsBarcodesResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ItemsBarcodesResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ItemsBarcodesResult $item
     * @return ArrayOfItemsBarcodesResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

