<?php

namespace Merlion\Type;

class GetLinkedItemsResponse
{

    /**
     * @var \Merlion\Type\ArrayOfLinkedItemsResult
     */
    private $getLinkedItemsResult;

    /**
     * @return \Merlion\Type\ArrayOfLinkedItemsResult
     */
    public function getGetLinkedItemsResult()
    {
        return $this->getLinkedItemsResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfLinkedItemsResult $getLinkedItemsResult
     * @return GetLinkedItemsResponse
     */
    public function withGetLinkedItemsResult($getLinkedItemsResult)
    {
        $new = clone $this;
        $new->getLinkedItemsResult = $getLinkedItemsResult;

        return $new;
    }


}

