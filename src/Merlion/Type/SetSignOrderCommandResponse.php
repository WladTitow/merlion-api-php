<?php

namespace Merlion\Type;

class SetSignOrderCommandResponse
{

    /**
     * @var int
     */
    private $setSignOrderCommandResult;

    /**
     * @return int
     */
    public function getSetSignOrderCommandResult()
    {
        return $this->setSignOrderCommandResult;
    }

    /**
     * @param int $setSignOrderCommandResult
     * @return SetSignOrderCommandResponse
     */
    public function withSetSignOrderCommandResult($setSignOrderCommandResult)
    {
        $new = clone $this;
        $new->setSignOrderCommandResult = $setSignOrderCommandResult;

        return $new;
    }


}

