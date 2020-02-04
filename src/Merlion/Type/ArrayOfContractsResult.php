<?php

namespace Merlion\Type;

class ArrayOfContractsResult
{

    /**
     * @var \Merlion\Type\ContractsResult
     */
    private $item;

    /**
     * @return \Merlion\Type\ContractsResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\ContractsResult $item
     * @return ArrayOfContractsResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

