<?php

namespace Merlion\Type;

class GetOrderLinesGTDResponse
{

    /**
     * @var \Merlion\Type\ArrayOfOrderLinesGTDResult
     */
    private $getOrderLinesGTDResult;

    /**
     * @return \Merlion\Type\ArrayOfOrderLinesGTDResult
     */
    public function getGetOrderLinesGTDResult()
    {
        return $this->getOrderLinesGTDResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfOrderLinesGTDResult $getOrderLinesGTDResult
     * @return GetOrderLinesGTDResponse
     */
    public function withGetOrderLinesGTDResult($getOrderLinesGTDResult)
    {
        $new = clone $this;
        $new->getOrderLinesGTDResult = $getOrderLinesGTDResult;

        return $new;
    }


}

