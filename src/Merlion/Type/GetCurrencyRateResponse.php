<?php

namespace Merlion\Type;

class GetCurrencyRateResponse
{

    /**
     * @var \Merlion\Type\ArrayOfCurrencyRateResult
     */
    private $getCurrencyRateResult;

    /**
     * @return \Merlion\Type\ArrayOfCurrencyRateResult
     */
    public function getGetCurrencyRateResult()
    {
        return $this->getCurrencyRateResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfCurrencyRateResult $getCurrencyRateResult
     * @return GetCurrencyRateResponse
     */
    public function withGetCurrencyRateResult($getCurrencyRateResult)
    {
        $new = clone $this;
        $new->getCurrencyRateResult = $getCurrencyRateResult;

        return $new;
    }


}

