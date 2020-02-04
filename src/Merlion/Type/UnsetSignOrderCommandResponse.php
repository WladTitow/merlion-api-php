<?php

namespace Merlion\Type;

class UnsetSignOrderCommandResponse
{

    /**
     * @var int
     */
    private $unsetSignOrderCommandResult;

    /**
     * @return int
     */
    public function getUnsetSignOrderCommandResult()
    {
        return $this->unsetSignOrderCommandResult;
    }

    /**
     * @param int $unsetSignOrderCommandResult
     * @return UnsetSignOrderCommandResponse
     */
    public function withUnsetSignOrderCommandResult($unsetSignOrderCommandResult)
    {
        $new = clone $this;
        $new->unsetSignOrderCommandResult = $unsetSignOrderCommandResult;

        return $new;
    }


}

