<?php

namespace Merlion\Type;

class GetCurrencyRate
{

    /**
     * @var string
     */
    private $date;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return GetCurrencyRate
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }


}

