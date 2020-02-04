<?php

namespace Merlion\Type;

class GetRepresentativeResponse
{

    /**
     * @var \Merlion\Type\ArrayOfRepresentativeResult
     */
    private $getRepresentativeResult;

    /**
     * @return \Merlion\Type\ArrayOfRepresentativeResult
     */
    public function getGetRepresentativeResult()
    {
        return $this->getRepresentativeResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfRepresentativeResult $getRepresentativeResult
     * @return GetRepresentativeResponse
     */
    public function withGetRepresentativeResult($getRepresentativeResult)
    {
        $new = clone $this;
        $new->getRepresentativeResult = $getRepresentativeResult;

        return $new;
    }


}

