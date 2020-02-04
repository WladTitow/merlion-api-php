<?php

namespace Merlion\Type;

class GetCounterAgentResponse
{

    /**
     * @var \Merlion\Type\ArrayOfDictionaryResult
     */
    private $getCounterAgentResult;

    /**
     * @return \Merlion\Type\ArrayOfDictionaryResult
     */
    public function getGetCounterAgentResult()
    {
        return $this->getCounterAgentResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfDictionaryResult $getCounterAgentResult
     * @return GetCounterAgentResponse
     */
    public function withGetCounterAgentResult($getCounterAgentResult)
    {
        $new = clone $this;
        $new->getCounterAgentResult = $getCounterAgentResult;

        return $new;
    }


}

