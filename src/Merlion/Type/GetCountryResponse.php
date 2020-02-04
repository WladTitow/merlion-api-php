<?php

namespace Merlion\Type;

class GetCountryResponse
{

    /**
     * @var \Merlion\Type\ArrayOfDictionaryResult
     */
    private $getCountryResult;

    /**
     * @return \Merlion\Type\ArrayOfDictionaryResult
     */
    public function getGetCountryResult()
    {
        return $this->getCountryResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfDictionaryResult $getCountryResult
     * @return GetCountryResponse
     */
    public function withGetCountryResult($getCountryResult)
    {
        $new = clone $this;
        $new->getCountryResult = $getCountryResult;

        return $new;
    }


}

