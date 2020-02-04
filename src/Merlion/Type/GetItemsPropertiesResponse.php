<?php

namespace Merlion\Type;

class GetItemsPropertiesResponse
{

    /**
     * @var \Merlion\Type\ArrayOfItemsPropertiesResult
     */
    private $getItemsPropertiesResult;

    /**
     * @return \Merlion\Type\ArrayOfItemsPropertiesResult
     */
    public function getGetItemsPropertiesResult()
    {
        return $this->getItemsPropertiesResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfItemsPropertiesResult $getItemsPropertiesResult
     * @return GetItemsPropertiesResponse
     */
    public function withGetItemsPropertiesResult($getItemsPropertiesResult)
    {
        $new = clone $this;
        $new->getItemsPropertiesResult = $getItemsPropertiesResult;

        return $new;
    }


}

