<?php

namespace Merlion\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCommandResultResponse implements ResultInterface
{

    /**
     * @var \Merlion\Type\ArrayOfCommandResult
     */
    private $getCommandResultResult;

    /**
     * @return \Merlion\Type\ArrayOfCommandResult
     */
    public function getGetCommandResultResult()
    {
        return $this->getCommandResultResult;
    }

    /**
     * @param \Merlion\Type\ArrayOfCommandResult $getCommandResultResult
     * @return GetCommandResultResponse
     */
    public function withGetCommandResultResult($getCommandResultResult)
    {
        $new = clone $this;
        $new->getCommandResultResult = $getCommandResultResult;

        return $new;
    }


}

