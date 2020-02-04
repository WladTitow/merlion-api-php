<?php

namespace Merlion\Type;

class SetOrderHeaderCommandResponse
{

    /**
     * @var int
     */
    private $setOrderHeaderCommandResult;

    /**
     * @return int
     */
    public function getSetOrderHeaderCommandResult()
    {
        return $this->setOrderHeaderCommandResult;
    }

    /**
     * @param int $setOrderHeaderCommandResult
     * @return SetOrderHeaderCommandResponse
     */
    public function withSetOrderHeaderCommandResult($setOrderHeaderCommandResult)
    {
        $new = clone $this;
        $new->setOrderHeaderCommandResult = $setOrderHeaderCommandResult;

        return $new;
    }


}

