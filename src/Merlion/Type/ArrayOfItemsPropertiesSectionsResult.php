<?php

namespace Merlion\Type;

class ArrayOfItemsPropertiesSectionsResult
{

    /**
     * @var \Merlion\Type\ItemsPropertiesSectionsResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ItemsPropertiesSectionsResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ItemsPropertiesSectionsResult $item
     * @return ArrayOfItemsPropertiesSectionsResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

