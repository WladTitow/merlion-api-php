<?php

namespace Merlion\Type;

class GetContracts
{

    /**
     * @var string
     */
    private $CounterAgentCode;

    /**
     * @return string
     */
    public function getCounterAgentCode()
    {
        return $this->CounterAgentCode;
    }

    /**
     * @param string $CounterAgentCode
     * @return GetContracts
     */
    public function withCounterAgentCode($CounterAgentCode)
    {
        $new = clone $this;
        $new->CounterAgentCode = $CounterAgentCode;

        return $new;
    }


}

