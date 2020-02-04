<?php

namespace Merlion\Type;

class ArrayOfDictionaryResult
{

    /**
     * @var \Merlion\Type\DictionaryResult
     */
    private $item;

    /**
     * @return \Merlion\Type\DictionaryResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\DictionaryResult $item
     * @return ArrayOfDictionaryResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

