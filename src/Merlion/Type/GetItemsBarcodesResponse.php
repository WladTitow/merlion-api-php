<?php

namespace Merlion\Type;

class GetItemsBarcodesResponse
{

    /**
     * @var \Merlion\Type\ArrayOfItemsBarcodesResult
     */
    private $getItemsBarcodesResult;

    /**
     * @return \Merlion\Type\ArrayOfItemsBarcodesResult
     */
    public function getGetItemsBarcodesResult()
    {
        return $this->getItemsBarcodesResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfItemsBarcodesResult $getItemsBarcodesResult
     * @return GetItemsBarcodesResponse
     */
    public function withGetItemsBarcodesResult($getItemsBarcodesResult)
    {
        $new = clone $this;
        $new->getItemsBarcodesResult = $getItemsBarcodesResult;

        return $new;
    }


}

