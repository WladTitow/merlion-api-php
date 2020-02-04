<?php

namespace Merlion\Type;

class GetItemsResponse
{

    /**
     * @var \Merlion\Type\ArrayOfItemsResult
     */
    private $getItemsResult;

    /**
     * @return \Merlion\Type\ArrayOfItemsResult
     */
    public function getGetItemsResult()
    {
        return $this->getItemsResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfItemsResult $getItemsResult
     * @return GetItemsResponse
     */
    public function withGetItemsResult($getItemsResult)
    {
        $new = clone $this;
        $new->getItemsResult = $getItemsResult;

        return $new;
    }


}

