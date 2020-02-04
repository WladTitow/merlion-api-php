<?php

namespace Merlion\Type;

class CurrencyRateResult
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Date;

    /**
     * @var float
     */
    private $ExchangeRate;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return CurrencyRateResult
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return CurrencyRateResult
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     * @return CurrencyRateResult
     */
    public function withExchangeRate($ExchangeRate)
    {
        $new = clone $this;
        $new->ExchangeRate = $ExchangeRate;

        return $new;
    }


}

