<?php

namespace Merlion\Type;

class GetOrdersListResponse
{

    /**
     * @var \Merlion\Type\ArrayOfOrdersListResult
     */
    private $getOrdersListResult;

    /**
     * @return \Merlion\Type\ArrayOfOrdersListResult
     */
    public function getGetOrdersListResult()
    {
        return $this->getOrdersListResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfOrdersListResult $getOrdersListResult
     * @return GetOrdersListResponse
     */
    public function withGetOrdersListResult($getOrdersListResult)
    {
        $new = clone $this;
        $new->getOrdersListResult = $getOrdersListResult;

        return $new;
    }


}

