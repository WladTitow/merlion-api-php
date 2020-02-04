<?php

namespace Merlion\Type;

class ArrayOfRepresentativeResult
{

    /**
     * @var \Merlion\Type\RepresentativeResult
     */
    private $item;

    /**
     * @return \Merlion\Type\RepresentativeResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\RepresentativeResult $item
     * @return ArrayOfRepresentativeResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

