<?php

namespace Merlion\Type;

class GetRepresentative
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
     * @return GetRepresentative
     */
    public function withCounterAgentCode($CounterAgentCode)
    {
        $new = clone $this;
        $new->CounterAgentCode = $CounterAgentCode;

        return $new;
    }


}

