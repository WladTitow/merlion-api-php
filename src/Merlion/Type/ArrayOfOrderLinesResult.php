<?php

namespace Merlion\Type;

class ArrayOfOrderLinesResult
{

    /**
     * @var \Merlion\Type\OrderLinesResult
     */
    private $item;

    /**
     * @return \Merlion\Type\OrderLinesResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\OrderLinesResult $item
     * @return ArrayOfOrderLinesResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

