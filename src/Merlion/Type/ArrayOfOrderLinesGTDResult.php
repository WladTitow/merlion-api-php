<?php

namespace Merlion\Type;

class ArrayOfOrderLinesGTDResult
{

    /**
     * @var \Merlion\Type\OrderLinesGTDResult
     */
    private $item;

    /**
     * @return \Merlion\Type\OrderLinesGTDResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\OrderLinesGTDResult $item
     * @return ArrayOfOrderLinesGTDResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

