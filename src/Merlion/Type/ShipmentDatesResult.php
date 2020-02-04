<?php

namespace Merlion\Type;

class ShipmentDatesResult
{

    /**
     * @var string
     */
    private $Date;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return ShipmentDatesResult
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }


}

