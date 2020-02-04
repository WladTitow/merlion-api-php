<?php

namespace Merlion\Type;

class SetAddOrderLineCommandResponse
{

    /**
     * @var int
     */
    private $setAddOrderLineCommandResult;

    /**
     * @return int
     */
    public function getSetAddOrderLineCommandResult()
    {
        return $this->setAddOrderLineCommandResult;
    }

    /**
     * @param int $setAddOrderLineCommandResult
     * @return SetAddOrderLineCommandResponse
     */
    public function withSetAddOrderLineCommandResult($setAddOrderLineCommandResult)
    {
        $new = clone $this;
        $new->setAddOrderLineCommandResult = $setAddOrderLineCommandResult;

        return $new;
    }


}

