<?php

namespace Merlion\Type;

class SetMoveOrderLineCommandResponse
{

    /**
     * @var int
     */
    private $setMoveOrderLineCommandResult;

    /**
     * @return int
     */
    public function getSetMoveOrderLineCommandResult()
    {
        return $this->setMoveOrderLineCommandResult;
    }

    /**
     * @param int $setMoveOrderLineCommandResult
     * @return SetMoveOrderLineCommandResponse
     */
    public function withSetMoveOrderLineCommandResult($setMoveOrderLineCommandResult)
    {
        $new = clone $this;
        $new->setMoveOrderLineCommandResult = $setMoveOrderLineCommandResult;

        return $new;
    }


}

