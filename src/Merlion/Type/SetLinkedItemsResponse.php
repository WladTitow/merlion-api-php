<?php

namespace Merlion\Type;

class SetLinkedItemsResponse
{

    /**
     * @var string
     */
    private $setLinkedItemsResult;

    /**
     * @return string
     */
    public function getSetLinkedItemsResult()
    {
        return $this->setLinkedItemsResult;
    }

    /**
     * @param string $setLinkedItemsResult
     * @return SetLinkedItemsResponse
     */
    public function withSetLinkedItemsResult($setLinkedItemsResult)
    {
        $new = clone $this;
        $new->setLinkedItemsResult = $setLinkedItemsResult;

        return $new;
    }


}

