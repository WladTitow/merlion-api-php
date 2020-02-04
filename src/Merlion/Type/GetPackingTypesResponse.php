<?php

namespace Merlion\Type;

class GetPackingTypesResponse
{

    /**
     * @var \Merlion\Type\ArrayOfDictionaryResult
     */
    private $getPackingTypesResult;

    /**
     * @return \Merlion\Type\ArrayOfDictionaryResult
     */
    public function getGetPackingTypesResult()
    {
        return $this->getPackingTypesResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfDictionaryResult $getPackingTypesResult
     * @return GetPackingTypesResponse
     */
    public function withGetPackingTypesResult($getPackingTypesResult)
    {
        $new = clone $this;
        $new->getPackingTypesResult = $getPackingTypesResult;

        return $new;
    }


}

