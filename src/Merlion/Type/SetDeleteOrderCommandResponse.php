<?php

namespace Merlion\Type;

class SetDeleteOrderCommandResponse
{

    /**
     * @var int
     */
    private $setDeleteOrderCommandResult;

    /**
     * @return int
     */
    public function getSetDeleteOrderCommandResult()
    {
        return $this->setDeleteOrderCommandResult;
    }

    /**
     * @param int $setDeleteOrderCommandResult
     * @return SetDeleteOrderCommandResponse
     */
    public function withSetDeleteOrderCommandResult($setDeleteOrderCommandResult)
    {
        $new = clone $this;
        $new->setDeleteOrderCommandResult = $setDeleteOrderCommandResult;

        return $new;
    }


}

