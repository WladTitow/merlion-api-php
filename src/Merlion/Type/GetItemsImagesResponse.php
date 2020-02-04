<?php

namespace Merlion\Type;

class GetItemsImagesResponse
{

    /**
     * @var \Merlion\Type\ArrayOfItemsImagesResult
     */
    private $getItemsImagesResult;

    /**
     * @return \Merlion\Type\ArrayOfItemsImagesResult
     */
    public function getGetItemsImagesResult()
    {
        return $this->getItemsImagesResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfItemsImagesResult $getItemsImagesResult
     * @return GetItemsImagesResponse
     */
    public function withGetItemsImagesResult($getItemsImagesResult)
    {
        $new = clone $this;
        $new->getItemsImagesResult = $getItemsImagesResult;

        return $new;
    }


}

