<?php

namespace Merlion\Type;

class ArrayOfString
{

    /**
     * @var string
     */
    private $item;

    /**
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param string $item
     * @return ArrayOfString
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

