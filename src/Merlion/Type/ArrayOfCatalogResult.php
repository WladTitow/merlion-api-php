<?php

namespace Merlion\Type;

class ArrayOfCatalogResult
{

    /**
     * @var \Merlion\Type\CatalogResult
     */
    private $item;

    /**
     * @return \Merlion\Type\CatalogResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\CatalogResult $item
     * @return ArrayOfCatalogResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

