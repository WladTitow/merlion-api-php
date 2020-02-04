<?php

namespace Merlion\Type;

class ArrayOfItemsImagesResult
{

    /**
     * @var \Merlion\Type\ItemsImagesResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ItemsImagesResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ItemsImagesResult $item
     * @return ArrayOfItemsImagesResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

