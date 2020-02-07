<?php

namespace Merlion\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetOrderHeaderCommandResponse implements ResultInterface
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

