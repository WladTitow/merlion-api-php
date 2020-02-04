<?php

namespace Merlion\Type;

class GetItemsPropertiesSectionsResponse
{

    /**
     * @var \Merlion\Type\ArrayOfItemsPropertiesSectionsResult
     */
    private $getItemsPropertiesSectionsResult;

    /**
     * @return \Merlion\Type\ArrayOfItemsPropertiesSectionsResult
     */
    public function getGetItemsPropertiesSectionsResult()
    {
        return $this->getItemsPropertiesSectionsResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfItemsPropertiesSectionsResult $getItemsPropertiesSectionsResult
     * @return GetItemsPropertiesSectionsResponse
     */
    public function withGetItemsPropertiesSectionsResult($getItemsPropertiesSectionsResult)
    {
        $new = clone $this;
        $new->getItemsPropertiesSectionsResult = $getItemsPropertiesSectionsResult;

        return $new;
    }


}

