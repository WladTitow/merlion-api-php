<?php

namespace Merlion\Type;

class GetOrderLinesResponse
{

    /**
     * @var \Merlion\Type\ArrayOfOrderLinesResult
     */
    private $getOrderLinesResult;

    /**
     * @return \Merlion\Type\ArrayOfOrderLinesResult
     */
    public function getGetOrderLinesResult()
    {
        return $this->getOrderLinesResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfOrderLinesResult $getOrderLinesResult
     * @return GetOrderLinesResponse
     */
    public function withGetOrderLinesResult($getOrderLinesResult)
    {
        $new = clone $this;
        $new->getOrderLinesResult = $getOrderLinesResult;

        return $new;
    }


}

