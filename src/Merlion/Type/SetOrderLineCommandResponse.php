<?php

namespace Merlion\Type;

class SetOrderLineCommandResponse
{

    /**
     * @var int
     */
    private $setOrderLineCommandResult;

    /**
     * @return int
     */
    public function getSetOrderLineCommandResult()
    {
        return $this->setOrderLineCommandResult;
    }

    /**
     * @param int $setOrderLineCommandResult
     * @return SetOrderLineCommandResponse
     */
    public function withSetOrderLineCommandResult($setOrderLineCommandResult)
    {
        $new = clone $this;
        $new->setOrderLineCommandResult = $setOrderLineCommandResult;

        return $new;
    }


}

