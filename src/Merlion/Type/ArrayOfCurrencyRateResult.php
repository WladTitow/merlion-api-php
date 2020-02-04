<?php

namespace Merlion\Type;

class ArrayOfCurrencyRateResult
{

    /**
     * @var \Merlion\Type\CurrencyRateResult
     */
    private $item;

    /**
     * @return \Merlion\Type\CurrencyRateResult
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Merlion\Type\CurrencyRateResult $item
     * @return ArrayOfCurrencyRateResult
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

