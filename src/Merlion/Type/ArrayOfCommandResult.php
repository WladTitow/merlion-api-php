<?php

namespace Merlion\Type;

class ArrayOfCommandResult
{

    /**
     * @var \Merlion\Type\CommandResult
     */
    private $item;

    /**
     * @return \Merlion\Type\CommandResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\CommandResult $item
     * @return ArrayOfCommandResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

