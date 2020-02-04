<?php

namespace Merlion\Type;

class GetItemsAvailResponse
{

    /**
     * @var \Merlion\Type\ArrayOfItemsAvailResult
     */
    private $getItemsAvailResult;

    /**
     * @return \Merlion\Type\ArrayOfItemsAvailResult
     */
    public function getGetItemsAvailResult()
    {
        return $this->getItemsAvailResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfItemsAvailResult $getItemsAvailResult
     * @return GetItemsAvailResponse
     */
    public function withGetItemsAvailResult($getItemsAvailResult)
    {
        $new = clone $this;
        $new->getItemsAvailResult = $getItemsAvailResult;

        return $new;
    }


}

